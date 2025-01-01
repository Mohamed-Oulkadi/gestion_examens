<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        if (!session()->has('user')) {
<<<<<<< HEAD
            return redirect()->to('/login');  // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
=======
            return redirect()->to('/login');
>>>>>>> c7f799b571c829c8526e66d5296aa4b6a9ffe72e
        }

        // If logged in, show the dashboard
        return view('dashboard');
    }
}

