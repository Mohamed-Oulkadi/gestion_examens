<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'roles'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire

    protected $allowedFields = ['role_name']; // Colonnes modifiables

    protected $useTimestamps = false; // Désactive les colonnes created_at/updated_at
}