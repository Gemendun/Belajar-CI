<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Jika user belum login, tendang ke halaman login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Jika sudah login tapi bukan admin, tendang ke home
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/home');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}