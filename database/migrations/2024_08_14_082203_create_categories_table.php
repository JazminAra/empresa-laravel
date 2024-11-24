<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Nombre de la categoría
            $table->string('url')->unique(); //Url de la categoria
            $table->timestamps();
        });
        Schema::table('personas', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('nPerCodigo');
            //Definimos la relación
            $table->foreign('category_id')->references('nPerCodigo')->on('personas');
            // on('categories');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('personas', function (Blueprint $table) {
            //Borramos la restricción
            // servicios_category_id_foreign Esto en estructura de la tablo servicios
            $table->dropForeign('personas_category_id_foreign');
            //Borramos el compo
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('categories');
    }
};