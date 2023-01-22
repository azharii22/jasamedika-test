<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->integer('rt');
            $table->integer('rw');
            $table->date('tgl_lahir');
            $table->string('jk');
            $table->string('id_pasien');
            $table->unsignedInteger('id_kel');
            $table->foreign('id_kel')->references('id')->on('kelurahans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
