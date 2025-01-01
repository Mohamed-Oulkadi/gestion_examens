<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        if (!session()->has('user')) {
            return redirect()->to('/login');  // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
        }

        // If logged in, show the dashboard
        return view('dashboard');
    }
}

