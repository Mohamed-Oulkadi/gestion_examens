<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Examens extends BaseController
{
    public function index()
    {
   
        if (session()->has('user') && session()->get("role")=='Admin') {
            return view('Admin/examens');
        }

        return redirect()->to('/login');
        
    }
}

