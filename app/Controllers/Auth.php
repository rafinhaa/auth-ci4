<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }

    public function index()
    {
        return view('auth/login');
    }
    public function register(){
        return view('auth/register');
    }
    public function save(){        
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]|max_length[12]',
            'cpassword' => 'required|min_length[5]|max_length[12],matches[password]',
        ]);

        if(!$validation){
            return view('auth/register',['validation' => $this->validator ]);
        }else{
            echo 'form validated successful';
        }
    }
}