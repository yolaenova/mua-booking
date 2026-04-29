<?php

namespace App\Controllers\Admin; // Perhatikan ada folder Admin di sini

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class Service extends BaseController
{
    protected $serviceModel;

    public function __construct() {
        $this->serviceModel = new ServiceModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Layanan | BeautyBook',
            'services' => $this->serviceModel->findAll()
        ];
        return view('admin/services/index', $data);
    }

    public function create()
    {
        return view('admin/services/create', ['title' => 'Tambah Layanan']);
    }

    public function store()
    {
        // Validasi simpel supaya tidak error kalau lupa upload gambar
        $fileGambar = $this->request->getFile('image');
        
        if ($fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img/services', $namaGambar);
        } else {
            $namaGambar = 'default.jpg'; // pastikan ada file default di public/img/services
        }

        $this->serviceModel->save([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'duration'    => $this->request->getPost('duration'),
            'image'       => $namaGambar
        ]);

        return redirect()->to('/admin/services')->with('success', 'Layanan berhasil ditambahkan!');
    }
}