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
        Schema::create('nota', function (Blueprint $table) {
            $table->id();
            $table->string('KodeNota')->unique();
            $table->string('KodeTenan');
            $table->string('KodeKasir');
            $table->date('TglNota');
            $table->time('JamNota');
            $table->decimal('JumlahBelanja', 10, 2);
            $table->integer('Diskon');
            $table->decimal('Total', 10, 2);
            $table->timestamps();

            $table->foreign('KodeTenan')->references('KodeTenan')->on('tenans');
            $table->foreign('KodeKasir')->references('KodeKasir')->on('kasirs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
