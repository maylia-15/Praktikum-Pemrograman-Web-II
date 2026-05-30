<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getProfil()
    {
        return [
            'nama'  => 'Rabiah Riska Amaliah',
            'nim'   => '2410817320010',
            'prodi' => 'Teknologi Informasi',
            'fakultas' => 'Teknik, Universitas Lambung Mangkurat (ULM) Banjarmasin',
            'hobi'  => 'Jalan-jalan',
            'skill' => 'PHP, Python, Java, Kotlin',
        ];
    }
}