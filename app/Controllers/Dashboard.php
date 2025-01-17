<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        // Check if the user is logged in (if session data exists)
        if (session()->has('user') && session()->get("role")=='Admin') {
            return view('Admin/dashboard');
        }

        return redirect()->to('/login');
        
    }
}

