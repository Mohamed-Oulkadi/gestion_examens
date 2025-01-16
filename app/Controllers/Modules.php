<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModuleModel;
use App\Models\FiliereModel;
use App\Models\UserModel;
use App\Models\FiliereModuleModel;


class Modules extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        if (session()->has('user') && session()->get("role") == 'Admin') {

            $moduleModel = new ModuleModel(); // Remplacez par le nom correct de votre modèle
            $filModel = new FiliereModel();
            $userModel = new UserModel();
            $data['professeurs'] = $userModel->getProfesseurs();
            $data['modules'] = $moduleModel->getModules();
            $data['filieres'] = $filModel->findAll();
            // Afficher les données de manière lisible pour le débogage
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';



            return view('Admin/module', $data);
        }

        return redirect()->to('/login');
    }



    public function insert()
    {
        // Charger les modèles nécessaires
        $moduleModel = new ModuleModel();
        $filiereModuleModel = new \App\Models\FiliereModuleModel();
    
        // Récupérer les données du formulaire
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $filieres = $this->request->getPost('filieres'); // Tableau des IDs des filières
        $professeur = $this->request->getPost('professeur'); // ID du professeur
    
        // Vérifier les champs obligatoires
        if (empty($name) || empty($description) || empty($filieres) || empty($professeur)) {
            echo 'Tous les champs sont obligatoires.';
            return; // Stop further execution
        }
    
        // Commencer une transaction pour garantir l'intégrité des données
        $db = \Config\Database::connect();
        $db->transStart();
    
        try {
            // Insérer le module
            $moduleId = $moduleModel->insert([
                'name' => $name,
                'description' => $description,
                'professeur_id' => $professeur, // Associer le professeur au module
            ]);
    
            if (!$moduleId) {
                throw new \Exception('Échec de l\'insertion du module.');
            }
    
            // Associer le module aux filières
            foreach ($filieres as $filiereId) {
                $result = $filiereModuleModel->insert([
                    'filiere_id' => $filiereId,
                    'module_id' => $moduleId,
                ]);
    
                if (!$result) {
                    throw new \Exception('Échec de l\'insertion de la relation filière-module.');
                }
            }
    
            // Commit transaction if everything is fine
            $db->transComplete();
    
            if ($db->transStatus() === false) {
                throw new \Exception('Erreur lors de la transaction.');
            }
    
            // Rediriger après le succès
            return redirect()->back()->with('message', 'Module ajouté avec succès!');
        } catch (\Exception $e) {
            // Rollback transaction in case of failure
            $db->transRollback();
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function edit($id)
    {
        $moduleModel = new ModuleModel();
        $userModel = new UserModel();
        $filModel = new FiliereModel();
        $filieremoduleModel = new FiliereModuleModel();

        //filieres
        $data['filieres'] = $filModel->findAll();

        // Récupérer les détails du module
        $module = $moduleModel->find($id);

        // echo $module['id'];
        //professeur
        $professeur = $userModel->find($module['professeur_id']);

        // echo $module['professeur_id'];
        // //filiere_id
        $filmod = $filieremoduleModel->getfiliere($id);


    // echo '<pre>';
    //     print_r($filmod);
    //     echo '</pre>';
        // if (!empty($filmod)) {
        //     foreach ($filmod as $row) {
        //         // Affichage des données de chaque ligne
        //         echo "Filière ID : " . $row->filiere_id . ", Module ID : " . $row->module_id . "<br>";
        //     }
        // } else {
        //     echo "Aucune correspondance trouvée pour module_id = $id.";
        // }
        // echo $filmod["module_id"];
        $fil_id = $filmod[0]["filiere_id"];
      
        

        $data["filiere_id"]=$fil_id;
        $data['professeurs'] = $userModel->getProfesseurs();
        $data['module']= $module;
        $data['prof']= $professeur;


        
        if (!$module) {
            return redirect()->back()->with('error', 'Module introuvable.');
        }

        // Charger la vue avec les données du module
        return view('Admin/editmodule', $data);
        
    }
    public function update($id)
    {
        $moduleModel = new ModuleModel();
        $filiereModuleModel = new FiliereModuleModel(); // Initialiser le modèle
    
        // Récupérer les données du formulaire
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $filiere_Id = $this->request->getPost('filiere');
        $profId = $this->request->getPost('professeur');
    
        // Vérification des champs obligatoires
        if (empty($name) || empty($profId) || empty($filiere_Id)) {
            return redirect()->back()->with('error', 'Tous les champs sont obligatoires.');
        }
    
        // Commencer une transaction pour garantir l'intégrité des données
        $db = \Config\Database::connect();
        $db->transStart();
    
        try {
            // Mettre à jour le module
            $moduleUpdated = $moduleModel->update($id, [
                'name' => $name,
                'description' => $description,
                'professeur_id' => $profId, // Associer le professeur au module
            ]);
    
            if (!$moduleUpdated) {
                throw new \Exception('Échec de la mise à jour du module.');
            }
    
            // Mettre à jour la relation filière-module
            $relationUpdated = $filiereModuleModel->where('module_id', $id)->set([
                'filiere_id' => $filiere_Id,
                'module_id' => $id,
            ])->update();
    
            if (!$relationUpdated) {
                throw new \Exception('Échec de la mise à jour de la relation filière-module.');
            }
    
            // Valider la transaction
            $db->transComplete();
    
            if ($db->transStatus() === false) {
                throw new \Exception('Erreur lors de la transaction.');
            }
    
            // Rediriger après succès
            return redirect()->to("/admin/modules")->with('message', 'Module modifié avec succès.');
        } catch (\Exception $e) {
            // Annuler la transaction en cas d'échec
            $db->transRollback();
            return redirect()->back()->with('error', 'Erreur : ' . $e->getMessage());
        }
    }
    

    public function delete($id)
{
    $moduleModel = new ModuleModel();
    $filiereModuleModel = new FiliereModuleModel();

    // Start a database transaction
    $db = \Config\Database::connect();
    $db->transStart();

    try {
        // Delete the module-filiere relationship
        $filiereModuleModel->where('module_id', $id)->delete();

        // Delete the module itself
        $moduleDeleted = $moduleModel->delete($id);

        if (!$moduleDeleted) {
            throw new \Exception('Échec de la suppression du module.');
        }

        // Commit the transaction
        $db->transComplete();

        if ($db->transStatus() === false) {
            throw new \Exception('Erreur lors de la transaction.');
        }

        return redirect()->to('/admin/modules')->with('message', 'Module supprimé avec succès.');
    } catch (\Exception $e) {
        // Rollback on failure
        $db->transRollback();
        return redirect()->back()->with('error', 'Erreur : ' . $e->getMessage());
    }
}

    


}
