<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Resultas extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        if (session()->has('user') && session()->get("role")=='Admin') {
            return view('Admin/resultats');
        }

        return redirect()->to('/login');
        
    }
}

