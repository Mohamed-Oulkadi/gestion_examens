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

}

