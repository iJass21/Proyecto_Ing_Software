<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children_motivo_ingreso', function (Blueprint $table) {
            $table->foreignId('children_id')->references('id')->on('childrens')->onDelete('cascade');
            $table->foreignId('motivo_ingreso_id')->references('id')->on('motivo_ingresos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children_motivo_ingreso');
    }
};
