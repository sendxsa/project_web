<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_batasan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('luas_rencana_id');
            $table->integer('luas_lantai_dasar');
            $table->integer('luas_basement');
            $table->integer('luas_seluruh_lantai');
            $table->integer('KDH_');
            $table->integer('KDB');
            $table->integer('KLB');
            $table->integer('KDH');
            $table->integer('jumlah_lantai');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('luas_rencana_id')->references('id')->on('data_luas_rencana')->onDelete('cascade');
        });
    }

    /**post
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_batasan');
    }
};
