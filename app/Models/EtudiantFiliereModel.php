<?php
namespace App\Models;

use CodeIgniter\Model;

class EtudiantFiliereModel extends Model
{
    protected $table      = 'etudiant_filiere';
    protected $primaryKey = 'id';
    protected $allowedFields = ['etudiant_id', 'filiere_id'];

   
}
