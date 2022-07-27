<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = [
        'id_pelajaran', 
        'id_kelas',
        'pertanyaan', 
        'pilihan_a', 
        'pilihan_b', 
        'pilihan_c', 
        'pilihan_d', 
        'pilihan_e', 
        'kunci' 
    ];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    // relasi model pelajaran
    public function pelajaran()
    {
        // data dari model 'soal' bisa dimiliki
        // oleh model 'pelajaran' melalui 'id_p4elajaran'
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }

    // relasi model kelas
    public function kelas()
    {
        // data dari model 'soal' bisa dimiliki
        // oleh model 'kelas' melalui 'id_kelas'
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
