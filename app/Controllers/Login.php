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
<<<<<<< HEAD
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $model = new CompteModel();
        
        $user = $model->where('username', $username)->first();
        
        if ($user && password_verify($password, $user["password"])) {
            session()->set('user', $user);  
            return redirect()->to('/dashboard');  
        } else {
            session()->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to(uri: '/login');  
=======
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
            return redirect()->to('/dashboard');  // Redirect to dashboard on successful login
        } else {
            session()->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/login');  // Redirect back to login page
>>>>>>> c7f799b571c829c8526e66d5296aa4b6a9ffe72e
        }
    }
}
