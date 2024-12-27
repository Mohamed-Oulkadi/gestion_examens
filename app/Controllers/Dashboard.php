<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        if (!session()->has('user')) {
            return redirect()->to('/login');
        }

        // If logged in, show the dashboard
        return view('dashboard');
    }
}

