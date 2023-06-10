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
        Schema::table('alertas', function (Blueprint $table) {
            //
            $table->date('fecha_alerta');

            /*$table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('some action');*/
            
            $table->foreignId('children_id')->references('id')->on('childrens')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alertas', function (Blueprint $table) {
            //
            $table->dropColumn('fecha_alerta');
            $table->dropColumn('child_id');
            $table->dropForeign('alertas_child_id_foreign');
        });
    }
};
