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
        Schema::create('bahans', function (Blueprint $table) {
            $table->id('id_bahans')->autoIncrement();
            $table->unsignedBigInteger('id_resep');
            $table->foreign('id_resep')->references('id_resep')->on('reseps')->onDelete('cascade');
            $table->string('nama_bahan');
            $table->string('takaran');
            $table->string('satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahans');
    }
};
