<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Pages extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'mahasiswa' => $this->mahasiswaModel->getProfil()
        ];
        return view('beranda', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Praktikan',
            'mahasiswa' => $this->mahasiswaModel->getProfil()
        ];
        return view('profil', $data);
    }
}