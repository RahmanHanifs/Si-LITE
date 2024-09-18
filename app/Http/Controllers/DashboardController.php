<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Muhamad Gunawan',
            'nim' => '24060122120016',
            'dosen_wali' => 'Luthfan Lazuardi, S.Kom, M.Cs',
            'nip_dosen_wali' => '1992018120016',
            'semester_studi' => 5,
            'tahun_akademik' => '2024 / 2025 Ganjil',
            'status' => 'Aktif',
            'ipk' => 3.89,
            'sks' => 90,
            'jadwal_kuliah' => [
                ['hari' => 'Senin', 'waktu' => '07.00 - 09.30', 'matkul' => 'Proyek Perangkat Lunak', 'ruangan' => 'E101'],
                ['hari' => 'Senin', 'waktu' => '13.00 - 15.30', 'matkul' => 'Machine Learning', 'ruangan' => 'A303'],
                ['hari' => 'Senin', 'waktu' => '15.40 - 18.20', 'matkul' => 'Penambangan Data', 'ruangan' => 'E103'],
            ],
        ];

        return view ('dashboard', compact('data'));
    }
}
