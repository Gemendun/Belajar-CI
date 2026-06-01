<?php

namespace App\Controllers;

use App\Models\ProductModel; 

class Home extends BaseController
{
    protected $productModel;

    function __construct()
    {
        $this->productModel = new ProductModel();
    }

    // Perbaikan: Hapus ": s" dan ganti dengan ": string" 
    // atau hilangkan saja jika tidak ingin menggunakan return type
    public function index()
    {
        return view('v_home', [
            'products' => $this->productModel->findAll()
        ]);
    }
}