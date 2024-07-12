<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'tb_mahasiswa';
    protected $primaryKey       = 'NIM';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ["NIM", "NAMA", "PRODI", "UNIVERSITAS", "NOMOR_HANDPHONE"];
}
