<?php
namespace App\Models;

use CodeIgniter\Model;

class ResultatModel extends Model
{
    protected $table      = 'resultats';
    protected $primaryKey = 'id';
    protected $allowedFields = ['examen_id', 'student_id', 'grade', 'created_at'];
}
