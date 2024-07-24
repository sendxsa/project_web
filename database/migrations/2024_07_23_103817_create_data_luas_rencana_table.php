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
        Schema::create('data_luas_rencana', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('data_id');
            $table->integer('luas_lantai_dasar');
            $table->integer('luas_basement');
            $table->integer('KDH');
            $table->integer('KTB');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('data_id')->references('id_recap')->on('data')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_luas_rencana');
    }
};
