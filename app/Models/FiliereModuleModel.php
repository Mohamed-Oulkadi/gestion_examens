<?php
namespace App\Models;

use CodeIgniter\Model;

class FiliereModuleModel extends Model
{
    protected $table      = 'filiere_module';
    protected $primaryKey = 'id';
    protected $allowedFields = ['filiere_id', 'module_id'];

    public function getfiliere($id_module) {
        return $this->db->table('filiere_module')
            ->select("filiere_id, module_id")
            ->where("module_id", $id_module)
            ->get()
            ->getResultArray();// Retourne les résultats sous forme d'objets
    }
    
    
}
