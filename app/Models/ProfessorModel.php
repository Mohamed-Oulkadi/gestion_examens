<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfessorModel extends Model
{
    protected $table      = 'professors'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'password', 'role'];
    protected $useTimestamps = true;  

    // Spécifier la validation
    protected $validationRules = [
        'email'    => 'required|valid_email|is_unique[professors.email]',  
        'password' => 'required|min_length[8]',
    ];
    
    // Méthode pour vérifier les informations de connexion (email et mot de passe)
    public function login($email, $password)
    {
        // Recherche du professeur dans la base de données avec l'email
        $professor = $this->where('email', $email)->first();

        if ($professor && password_verify($password, $professor['password'])) {
            // Authentification réussie, retourne les données du professeur
            return $professor;
        }

        // Retourne false si l'authentification échoue
        return false;
    }
    
    // Fonction pour vérifier si un professeur existe par ID
    public function findById($id)
    {
        return $this->find($id);  // Retourne un professeur par son ID
    }
}