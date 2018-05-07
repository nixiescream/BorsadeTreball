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
        Schema::create('empresas', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('empresa_nom');
            $table->string('empresa_email')->unique();
            $table->string('empresa_cif')->default("")->unique();
            $table->string('empresa_telefon')->default("");
            $table->string('empresa_addr')->default("");
            $table->string('empresa_password');
            $table->string('empresa_rol');
            $table->integer('empresa_validat')->default(0);
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
