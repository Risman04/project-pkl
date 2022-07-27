<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('nis');
            $table->string('kelamin');
            $table->string('agama');
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('no_tlp');
            $table->string('foto');
            $table->unsignedbiginteger('id_kelas');
            $table->string('username');
            $table->string('password');

             //foreign key
            $table->foreign('id_kelas')->references('id')->on('kelas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
