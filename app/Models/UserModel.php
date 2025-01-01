<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire

<<<<<<< HEAD
    
=======
>>>>>>> c7f799b571c829c8526e66d5296aa4b6a9ffe72e
    protected $allowedFields = ['nom', 'prenom', 'email']; // Colonnes modifiables

    protected $useTimestamps = false; // Désactive les colonnes created_at/updated_at
}