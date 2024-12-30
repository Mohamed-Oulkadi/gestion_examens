<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {
        // Destroy the user session and redirect to the login page
        session()->destroy();
        return redirect()->to('/login');
    }
}
