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
        Schema::create('gizis', function (Blueprint $table) {
            $table->id('id_gizi')->autoIncrement();
            $table->unsignedBigInteger('id_resep');
            $table->foreign('id_resep')->references('id_resep')->on('reseps')->onDelete('cascade');
            $table->float('karbohidrat');
            $table->float('lemak');
            $table->float('protein');
            $table->float('energi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gizis');
    }
};
