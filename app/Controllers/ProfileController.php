<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileController extends BaseController
{
    public function index()
    {
        // Ambil data dari session
        $session = session();

        // Siapkan data untuk dikirim ke view
        $data = [
            'username'   => $session->get('username'),
            'role'       => $session->get('role'),
            'email'      => $session->get('email'),
            'login_time' => $session->get('login_time'),
            'status'     => $session->get('isLoggedIn') ? 'Sudah Login' : 'Belum Login'
        ];

        // Pastikan variabel $data dimasukkan ke dalam fungsi view()
        return view('v_profile', $data);
    }
}