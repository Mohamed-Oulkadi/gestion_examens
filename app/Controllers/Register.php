<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CompteModel;
use App\Models\RoleModel;

class Register extends BaseController
{
    public function index(): string
    {
        $roleModel = new RoleModel();
        $roles = $roleModel->findAll(); // Récupère tous les rôles de la table 'roles'
        
        // Charger la vue et transmettre les rôles
        return view('register', ['roles' => $roles]);
    }

    public function processRegister()
    {
        // Charger les modèles nécessaires
        $userModel = new UserModel();
        $compteModel = new CompteModel();
        $roleModel = new RoleModel();
    
        // Récupérer les données du formulaire
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password'); // Mot de passe sans hachage
        $role_id = $this->request->getPost('role'); // Récupérer le nom du rôle
    
        // Vérifier si toutes les données sont présentes
        if (empty($nom) || empty($prenom) || empty($email) || empty($username) || empty($password) || empty($role_id)) {
            return redirect()->back()->with('error', 'Tous les champs sont obligatoires.');
        }
    
        // Trouver l'ID du rôle correspondant au nom du rôle
      
    
        // Commencer une transaction
        $db = \Config\Database::connect();
        $db->transStart();
    
        try {
            // Insérer l'utilisateur dans la table 'users'
            $userId = $userModel->insert([
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
            ], true); // Retourne l'ID de l'utilisateur inséré
    
            // Insérer le compte dans la table 'comptes'
            $compteModel->insert([
                'user_id' => $userId,
                'username' => $username,
                'password' => $password, // Enregistrement direct sans hachage
                'role_id' => $role_id,
            ]);
    
            // Finaliser la transaction
            $db->transComplete();
    
            if ($db->transStatus() === false) {
                throw new \Exception('Erreur lors de l\'insertion des données.');
            }
    
            // Rediriger avec un message de succès
            return redirect()->to('/login')->with('success', 'Utilisateur inscrit avec succès.');
    
        } catch (\Exception $e) {
            // Annuler la transaction en cas d'erreur
            $db->transRollback();
    
            // Retourner avec un message d'erreur
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    


}
