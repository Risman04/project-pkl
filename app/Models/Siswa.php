<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = [
        'nama_siswa', 
        'nis',
        'kelamin', 
        'agama', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'alamat', 
        'no_tlp', 
        'foto',
        'kode_kelas',
        'username',
        'password' 
    ];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // relasi model pelajaran
    public function pelajaran()
    {
        // data dari model 'soal' bisa dimiliki
        // oleh model 'pelajaran' melalui 'id_p4elajaran'
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

}
