<?php
namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    protected $table      = 'module';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'created_at','professeur_id'];


    public function getModules()
{
    return $this->db->table('module')
        ->select('module.id AS module_id, module.name AS module_name, module.description,professeur_id, users.nom AS professeur_nom, users.prenom AS professeur_prenom, filiere.name AS filiere_name,filiere.id AS filiere_id')
        ->join('users', 'users.id = module.professeur_id') // Liaison module → professeur
        ->join('filiere_module', 'filiere_module.module_id = module.id') // Liaison module → filiere_module
        ->join('filiere', 'filiere.id = filiere_module.filiere_id') // Liaison filiere_module → filiere
        ->get()
        ->getResultArray();
}

  

}
