<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Profil extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        
        if (session()->has('user') && session()->get("role")=='Etudiant') {
            return view('Etudiant/profil');
        }

        return redirect()->to('/login');
    }
}

