<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 191);
            $table->string('nip', 191);
            $table->string('jabatan', 191);
            $table->string('pendidikan', 191);
            $table->string('tempat_lahir', 191);
            $table->string('tanggal_lahir', 191);
            $table->string('agama', 191);
            $table->string('telp', 191);
            $table->string('alamat', 191); // Hapus spasi di akhir
            $table->string('photo')->default('imageuser');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('guru');
    }
}