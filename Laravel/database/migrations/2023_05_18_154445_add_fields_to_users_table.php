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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('rut')->unique();
            $table->date('f_nac');
            $table->string('cargo');
            $table->boolean('mod_ficha');
            $table->string('direccion');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('rut');
            $table->dropColumn('f_nac');
            $table->dropColumn('cargo');
            $table->dropColumn('mod_ficha');
            $table->dropColumn('direccion');
            $table->dropColumn('phone');
        });
    }
};
