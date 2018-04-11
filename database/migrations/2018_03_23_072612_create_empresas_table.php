<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('users_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('users_nom')->references('name')->on('users')->onDelete('cascade');
            $table->string('users_email')->unique()->references('email')->on('users')->onDelete('cascade');
            $table->string('users_password')->references('password')->on('users')->onDelete('cascade');
            $table->string('users_rol')->references('rol')->on('users')->onDelete('cascade');
            $table->integer('users_validat')->references('validat')->on('users')->onDelete('cascade');
            $table->string('nif')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('empresas');
    }
}
