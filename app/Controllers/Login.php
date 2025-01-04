<?php

namespace App\Controllers;
use App\Models\CompteModel;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function authenticate()
    {
        // Get the input username and password
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        // Initialize the model to interact with the database
        $model = new CompteModel();
        
        // Retrieve the user by username
        $user = $model->where('username', $username)->first();
        
        // Check if the user exists and verify the password using password_verify
        if ($user && password_verify($password, $user["password"])) {
            session()->set('user', $user);  // Store user session
            return redirect()->to('/Admin/dashboard');  // Redirect to dashboard on successful login
        } else {
            session()->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/login');  // Redirect back to login page
        }
    }
}
