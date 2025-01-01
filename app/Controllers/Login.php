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
        }
    }
}
