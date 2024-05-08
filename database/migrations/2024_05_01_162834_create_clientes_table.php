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
        //
        Schema::create('clientes', function (Blueprint $table) {

          
            $table->id();
            $table->integer('cedula')->nullable();
            $table->string('nombre')->nullable();
            $table->string('numero_de_telefono')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('clientes');
    }
};
