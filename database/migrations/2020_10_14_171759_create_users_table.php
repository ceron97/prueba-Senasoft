<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('direccion')->nullable();
            $table->integer('telefono')->nullable();
<<<<<<< HEAD:database/migrations/2020_10_14_162951_create_users_table.php
            $table->string('rol');
            // $table->unsignedInteger('id_empresa');
=======
            $table->bigInteger('role_id')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->bigInteger('id_empresa')->unsigned()->nullable();
            $table->foreign('id_empresa')->references('id')->on('empresas');
>>>>>>> 8199eceb7daca29dd2dd70977acdbc10ee046734:database/migrations/2020_10_14_171759_create_users_table.php
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
        Schema::dropIfExists('users');
    }
}
