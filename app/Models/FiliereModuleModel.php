<?php
namespace App\Models;

use CodeIgniter\Model;

class FiliereModuleModel extends Model
{
    protected $table      = 'filiere_module';
    protected $primaryKey = 'id';
    protected $allowedFields = ['filiere_id', 'module_id'];
}
