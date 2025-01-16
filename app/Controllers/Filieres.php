<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FiliereModel;


class Filieres extends BaseController
{
    public function index()
    {
        if (session()->has('user') && session()->get("role")=='Admin') {
            $model = new FiliereModel();
            $filieres = $model->findAll();
            
            $data['filieres']= $filieres;

            return view('Admin/filieres',$data);
        }

        return redirect()->to('/login');
        
    }

    public function insert()
    {
        $filiereModel = new FiliereModel();

        // Récupérer les données du formulaire
        $nomFiliere = $this->request->getPost('nom_filiere');
        $description = $this->request->getPost('description');

        // Vérifier les champs obligatoires
        if (empty($nomFiliere) || empty($description)) {
            return redirect()->back()->with('error', 'Tous les champs sont obligatoires.');
        }

        // Préparer les données pour l'insertion
        $data = [
            'name' => $nomFiliere,
            'description' => $description,
        ];

        // Insérer dans la base de données
        if ($filiereModel->insert($data)) {
            return redirect()->back()->with('success', 'Filière ajoutée avec succès.');
        } else {
            // En cas d'erreurs, afficher les messages d'erreur
            $errors = $filiereModel->errors();
            return redirect()->back()->with('error', implode('<br>', $errors));
        }
    }
    public function update($id)
{
    if (!session()->has('user') || session()->get("role") != 'Admin') {
        return $this->response->setJSON(['success' => false, 'message' => 'Unauthorized access']);
    }

    $filiereModel = new FiliereModel();
    
    // Récupérer les données du formulaire
    $nomFiliere = $this->request->getPost('name');
    $description = $this->request->getPost('description');
    
    // Vérifier les champs obligatoires
    if (empty($nomFiliere) || empty($description)) {
        return $this->response->setJSON(['success' => false, 'message' => 'Tous les champs sont obligatoires']);
    }
    
    // Préparer les données pour la mise à jour
    $data = [
        'name' => $nomFiliere,
        'description' => $description,
    ];
    
    // Mettre à jour dans la base de données
    if ($filiereModel->update($id, $data)) {
        return $this->response->setJSON(['success' => true, 'message' => 'Filière mise à jour avec succès']);
    } else {
        return $this->response->setJSON(['success' => false, 'message' => 'Erreur lors de la mise à jour']);
    }
}

public function delete($id)
{
    if (!session()->has('user') || session()->get("role") != 'Admin') {
        return $this->response->setJSON(['success' => false, 'message' => 'Unauthorized access']);
    }

    $filiereModel = new FiliereModel();
    
    if ($filiereModel->delete($id)) {
        return $this->response->setJSON(['success' => true, 'message' => 'Filière supprimée avec succès']);
    } else {
        return $this->response->setJSON(['success' => false, 'message' => 'Erreur lors de la suppression']);
    }
}

}

