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
        Schema::create('motivo_child', function (Blueprint $table) {
            $table->foreignId('children_id')->references('id')->on('children')->onDelete('cascade');
            $table->foreignId('motivo_id')->references('id')->on('motivo_ingreso')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motivo_child');
    }
};
