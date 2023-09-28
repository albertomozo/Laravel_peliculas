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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('tmdb_id', 20);
            $table->string('titulo', 255);
            $table->string('poster', 255);
            $table->enum('estado', ['A', 'D', 'B'])->comment('A-activo D-desactivado B-Borrar');
            $table->date('estreno');
            $table->text('overview')->nullable();
            $table->text('opinion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
