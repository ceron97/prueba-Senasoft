<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitar', function (Blueprint $table) {
            $table->id();
            $table->integer('id_producto');
            $table->string('nombre_producto');
            $table->integer('cantidad_producto');
            $table->integer('codigo_producto');
            $table->integer('id_bodega');
            $table->integer('id_usuario');
            $table->string('nombre_usuario');
            $table->integer('id_proveedor');
            $table->string('nombre_proveedor');
            $table->integer('id_empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitar');
    }
}
