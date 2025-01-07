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
    
}
