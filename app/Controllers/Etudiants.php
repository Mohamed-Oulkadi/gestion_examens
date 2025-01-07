<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\FiliereModel;
use App\Models\EtudiantFiliereModel;

class Etudiants extends BaseController
{
    public function index()
    {
    
        if (session()->has('user') && session()->get("role")=='Admin') {
            $userModel = new UserModel(); // Remplacez par le nom correct de votre modèle
            $filModel = new FiliereModel();
            
            $data['etudiants'] = $userModel->getAllEtudiants();
            $data['etudiant_non_fil'] = $userModel->getEtudiantsSansFiliere();
            $data['filieres'] = $filModel->findAll();
                // Afficher les données de manière lisible pour le débogage
            //    echo '<pre>';
            //     print_r($data);
            //     echo '</pre>';
    
            return view('Admin/etudiants',$data);
        }

        return redirect()->to('/login');
        
    }

    public function assigne_etu_fil(){
        $id_etud = $this->request->getPost('etudiant');
        $id_fil = $this->request->getPost('filiere');

        if (empty($id_etud) || empty($id_fil)) {
            echo 'Tous les champs sont obligatoires.';
            // return redirect()->back()->with('error', 'Tous les champs sont obligatoires.');
        }else{
            $etudiantFiliereModel = new EtudiantFiliereModel();
            $etudiantFiliereModel->insert([
                'etudiant_id' => $id_etud,
                'filiere_id' => $id_fil
            ]);

            return redirect()->back();
        }
    }
}

