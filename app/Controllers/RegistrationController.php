<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RegistrationController extends BaseController
{
    public function index()
    {
        return view ('auth/register_form');
    }

    public function create(){

        $data = [
            'fname' => $this->request->getPost('fname'),
            'lname' => $this->request->getPost('lname'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];

        $rules = array(
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'password' => 'required|min_length[8]',
        );

        $messages = array(
            'fname' => ['required' =>'First Name is required!'],
            'lname' => ['required' =>'Last Name is required!'],
        );

        if($this->validateData($data, $rules, $messages)){
            $validatedData = $this->validator->getValidated();
            $validatedData['password'] = md5($validatedData['password']);

            $userModel = model('UsersModel');
            $userModel -> registerUser($validatedData);
        } else{
            return $this->index();
        }




    }
}
