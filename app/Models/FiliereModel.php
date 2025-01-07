<?php
namespace App\Models;

use CodeIgniter\Model;

class FiliereModel extends Model
{
    protected $table      = 'filiere';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'created_at'];
}
