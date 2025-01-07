<?php

namespace App\Models;

use CodeIgniter\Model;

class CompteModel extends Model
{
    protected $table = 'comptes'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire

    protected $allowedFields = ['user_id', 'username', 'password', 'role_id']; // Colonnes modifiables

    protected $useTimestamps = false; // Désactive les colonnes created_at/updated_at


    
}