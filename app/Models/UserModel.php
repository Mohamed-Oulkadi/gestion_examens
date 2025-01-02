<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire

    protected $allowedFields = ['nom', 'prenom', 'email']; // Colonnes modifiables

    protected $useTimestamps = false; // Désactive les colonnes created_at/updated_at
}