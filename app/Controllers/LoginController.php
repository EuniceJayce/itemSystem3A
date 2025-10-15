<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        return view('auth/login_form');
    }

    public function validatedUser(){
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),

        );

        $rules = array(
            'username' => 'required',
            'password' => 'required',
        );

        if($this->validatedData($data, $rules)){
            $userModel = model('UsersModel');
            $userModel->getUserByUsername();
            $user = $userModel->getUserByUsername($validatedData['username']);

            if(!empty($user) && $user['password'] == md5 ($validatedData['password'])){
                echo "Login Success!";
            }
            else{
                echo "Invalid Credentials";
            }

            }else{
            $this->index();
        }
    }

}
