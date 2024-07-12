<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class CrudController extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->db->findAll()
        ];

        return view("/CRUD/view", $data);
    }

    public function tambah()
    {
        if (isset ($_POST['nim'])) {

            $nim = $_POST['nim'];

            $upload = [
                'NIM' => $nim,
                
            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('/crud'));
        }else {
            return view(('crud/upload'));
        }
    }
    public function edit($id)
    {
        $nim = $id;
        $a = $this->db->find($nim);
        $data = [
            'edit' => $a
        ];
        return view('crud/edit', $data);
    }
    public function editan()
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $universitas = $_POST['universitas'];
        $nomor_handphone = $_POST['nomor_handphone'];

        $upload = [
            'NIM' => $nim,
            'NAMA' => $nama,
            'PRODI' => $prodi,
            'UNIVERSITAS' => $universitas,
            'NOMOR_HANDPHONE' => $nomor_handphone
        ];

        $this->db->save($upload);

        return redirect()->to(base_url('/crud'));
    }
    public function hapus($id)
    {
        $nim = $id;
        $this->db->delete($nim);
        return redirect()->to(base_url('/crud'));
    }
}
