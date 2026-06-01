<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel; 

class AuthController extends BaseController
{
    protected $userModel;

    function __construct()
    {
        helper('form');
        $this->userModel = new UserModel();
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $rules = [
         'username' => 'required|min_length[3]',
         'password' => 'required|min_length[3]|numeric',
        ];
        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $user = $this->userModel->where('username', $username)->first();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    
                    session()->set([
                        'id'         => $user['id'],
                        'username'   => $user['username'],
                        'role'       => $user['role'],
                        'isLoggedIn' => TRUE
                    ]);

                    return redirect()->to(base_url('/'));
                } else {
                    session()->setFlashdata('failed', 'Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
                
            }
            } else {
            session()->setFlashdata('failed', $this->validator->listErrors());
            return redirect()->back();
        }
        } else {
            return view('v_login');
        }
    } // <--- INI PENTING: Penutup fungsi login()

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
} // <--- INI PENTING: Penutup class AuthController