<?php

namespace App\Controllers;

use App\Models\ProductModel; // Pastikan model produk sudah di-import

class AdminController extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->produkModel = new ProductModel();
        // Cek login dan role di setiap method
        if (session()->get('role') !== 'admin') {
            // Jika bukan admin, tendang ke home
            die("Akses ditolak! Anda bukan admin."); 
            // Atau: return redirect()->to('/');
        }
    }

    public function index()
    {
       // Di dalam method di Controller Anda
{
    // 1. Ambil data dari model
    $data['products'] = $this->produkModel->findAll(); 

    // 2. Kirim data ke view v_home
    return view('v_home', $data); 
}
    }

    public function produk()
    {
        // Contoh fungsi untuk manajemen data produk
        $data['produk'] = $this->produkModel->findAll();
        return view('admin/produk_list', $data);
    }
}