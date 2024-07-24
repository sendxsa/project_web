<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->string('id_recap')->primary();
            $table->string('nama');
            $table->date('tanggal');
            $table->date('tanggal_registrasi');
            $table->string('nomor_PBG');
            $table->string('no_PBG');
            $table->string('alamat');
            $table->string('RT');
            $table->string('RW');
            $table->string('kelurahan');
            $table->string('IRK');
            $table->integer('luas_lahan');
            $table->integer('luas_lahan_sertifikat');
            $table->integer('jumlah_lantai');
            $table->string('fungsi_bangunan');
            $table->string('penggunaan_bangunan');
            $table->string('status');
            $table->string('pbg_terbit');
            $table->string('no_pbg_terbit');
            $table->timestamps();  // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
