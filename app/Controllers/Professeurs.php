<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class Professeurs extends BaseController
{
    public function index()
{

    
    // Vérifiez si l'utilisateur est connecté et a le rôle "Admin"
   if (session()->has('user') && session()->get("role") == 'Admin') {
    $userModel = new UserModel(); // Remplacez par le nom correct de votre modèle
    $data['professeurs'] = $userModel->getProfesseurs();
        // Afficher les données de manière lisible pour le débogage
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // Vous pouvez également charger la vue si nécessaire
        return view('Admin/professeur', $data);
   }

    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    return redirect()->to('/login');
}

}

