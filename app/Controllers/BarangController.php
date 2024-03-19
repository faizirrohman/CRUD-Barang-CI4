<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BarangModel;

class BarangController extends Controller
{
    public function index()
    {
        $model                  = new BarangModel;
        $data['title']          = 'Data Barang';
        $data['getBarang']      = $model->getBarang();

        echo view('header_view', $data);
        echo view('barang_view', $data);
        echo view('footer_view', $data);
    }
}