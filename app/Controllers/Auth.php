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
        /*
        $validation = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]|max_length[12]',
            'cpassword' => 'required|min_length[5]|max_length[12]|matches[password]',
        ]);*/
        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Your email is required', 
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email already taken',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Your password is required', 
                    'min_length' => 'Password must have atleast 5 characters',
                    'max_length' => 'Password must not have characters than 12 in length',
                ],                
            ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Your confirmation password is required', 
                    'min_length' => 'Confirm password must have atleast 5 characters',
                    'max_length' => 'Confirm password must not have characters than 12 in length',
                    'matches' => 'Confirm password not matches to password',
                ],  
            ],
        ]);

        if(!$validation){
            return view('auth/register',['validation' => $this->validator]);
        }else{
            $name = $this->request->getpost('name');
            $email = $this->request->getpost('email');
            $password = $this->request->getpost('password');
            //columns in db
            $values = [
                'name'=> $name,
                'email'=> $email,
                'password'=> $password,
            ];

            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','something went wrong');
                //return redirect()->to('register')->with('fail','something went wrong');
            }else{
                return redirect()->to('register')->with('success','You are now registred, please login in');
            }
        }
    }
}