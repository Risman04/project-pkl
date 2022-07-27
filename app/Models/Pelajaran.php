<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama_pelajaran'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    public function soal()
    {
        //data dari model 'pelajaran' bisa dimiliki 1 data
        //dari model 'soal' melalui id_pelajaran
        return $this->hasOne(Soal::class, 'id_pelajaran');
    }
}
