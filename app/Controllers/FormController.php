<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class FormController extends Controller
{
    public function submitForm(){
        //mengambil Data yang dikirim melalui form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        //Menyiapkan data yang akan dikirim ke view
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten
        ];

        //menampilkan view dengan data yang telah disiapkan
        return view('form_result', $data);
    }
}