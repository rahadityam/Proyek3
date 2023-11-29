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
        Schema::create('barang_notas', function (Blueprint $table) {
            $table->id();
            $table->string('KodeNota');
            $table->string('KodeBarang');
            $table->integer('JumlahBarang');
            $table->decimal('HargaSatuan', 10, 2);
            $table->decimal('Jumlah', 10, 2);
            $table->timestamps();

            $table->foreign('KodeNota')->references('KodeNota')->on('nota');
            $table->foreign('KodeBarang')->references('KodeBarang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_notas');
    }
};
