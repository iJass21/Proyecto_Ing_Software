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
        Schema::create('adulto_responsables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('lastname');
            $table->integer('rut')->unique();
            $table->string('vinculo');
            $table->string('obs');
            $table->string('direccion');
            $table->string('phone');
            $table->string('objetivos');
            $table->string('email');
            $table->string('rubro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adulto_responsable');
    }
};
