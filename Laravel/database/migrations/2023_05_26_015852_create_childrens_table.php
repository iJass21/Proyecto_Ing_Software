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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('adulto_responsable_id')->references('id')->on('adulto_responsables')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('lastname');
            $table->integer('rut')->unique();
            $table->date('f_nac');
            $table->string('obs');
            $table->string('direccion');
            $table->string('phone_contact');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childrens');
    }
};
