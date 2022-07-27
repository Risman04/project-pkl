<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama_kelas'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    public function soal()
    {
        //data dari model 'kelas' bisa dimiliki 1 data
        //dati model 'soal' melalui id_kelas
        return $this->hasOne(Soal::class, 'id_kelas');
    }

    public function Siswa()
    {
        //data dari model 'kelas' bisa dimiliki 1 data
        //dati model 'soal' melalui id_kelas
        return $this->hasOne(Siswa::class, 'id_kelas');
    }
}
