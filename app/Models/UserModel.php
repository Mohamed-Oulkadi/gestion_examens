<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nom de la table
    protected $primaryKey = 'id'; // Clé primaire

    protected $allowedFields = ['nom', 'prenom', 'email']; // Colonnes modifiables

    protected $useTimestamps = false; // Désactive les colonnes created_at/updated_at

    public function getProfesseurs()
    {
        return $this->db->table('users')
            ->select('users.id as id, users.nom as nom, users.prenom as prenom, comptes.username as username, users.email as email')
            ->join('comptes', 'comptes.user_id = users.id')
            ->join('roles', 'roles.id = comptes.role_id')
            ->where('roles.role_name', 'Professeur') // Filtre uniquement pour les professeurs
            ->get()
            ->getResultArray(); // Retourne un tableau associatif
    }

    public function getAllEtudiants()
    {
        return $this->select('users.id as id,users.nom, users.prenom, users.email, comptes.username, filiere.name as filiere_nom')
                    ->join('comptes', 'comptes.user_id = users.id') // Jointure avec la table 'comptes'
                    ->join('etudiant_filiere', 'etudiant_filiere.etudiant_id = comptes.id') // Jointure avec 'etudiant_filiere'
                    ->join('filiere', 'filiere.id = etudiant_filiere.filiere_id') // Jointure avec la table 'filiere'
                    ->join('roles', 'roles.id = comptes.role_id')
                    ->where('roles.role_name', 'Etudiant') // Filtrer par le rôle 'Etudiant'
                    ->get()
            ->getResultArray(); 

    }
    
    public function getEtudiantsSansFiliere()
{
    return $this->db->table('users')
        ->select('comptes.id as id, users.nom, users.prenom')
        ->join('comptes', 'comptes.user_id = users.id')
        ->join('roles', 'roles.id = comptes.role_id')
        ->join('etudiant_filiere', 'etudiant_filiere.etudiant_id = comptes.id', 'left')
        ->where('roles.role_name', 'Etudiant')
        ->where('etudiant_filiere.etudiant_id IS NULL')
        ->get()
        ->getResultArray();
}


}