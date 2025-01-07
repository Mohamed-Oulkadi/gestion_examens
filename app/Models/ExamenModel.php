<?php
namespace App\Models;

use CodeIgniter\Model;

class ExamenModel extends Model
{
    protected $table      = 'examens';
    protected $primaryKey = 'id';
    protected $allowedFields = ['module_id', 'name', 'exam_date', 'created_at'];
}
