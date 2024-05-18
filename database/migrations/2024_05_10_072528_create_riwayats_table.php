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
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id('id_riwayat');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_resep');
            $table->date('tanggal')->default(now());
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_resep')->references('id_resep')->on('reseps')->onDelete('cascade');

            $table->unique(['id', 'id_resep']);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
