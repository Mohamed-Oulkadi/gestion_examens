<?php

namespace App\Controllers;
use App\Models\CompteModel;
use App\Models\RoleModel;

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
        $r_model = new RoleModel();
        
        // Retrieve the user by username
        $user = $model->where('username', $username)->first();
        $role = $r_model->where('id', $user['role_id'])->first();
        
        // Check if the user exists and verify the password using password_verify
        if ($user && password_verify($password, $user["password"])) {
            session()->set('user', $user);  // Store user session
            if($role['role_name']=='Etudiant'){
                session()->set('role', $role['role_name']);  // Store role session
                return redirect()->to('/Etudiant/dashboardEtudiant');  // Redirect to dashboard on successful login
            }else if($role['role_name']=='Admin'){
                session()->set('role', $role['role_name']);  // Store role session
                return redirect()->to('/admin/dashboard');  // Redirect to dashboard on successful login
            }else{
                session()->set('role', $role['role_name']);  // Store role session
                echo 'Prof';
            }
        } else {
            session()->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/login');  // Redirect back to login page
        }
    }

    
}
