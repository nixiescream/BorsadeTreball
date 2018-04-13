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
            $table->increments('id');
            $table->string('empresa_nom');
            $table->string('empresa_email')->unique();
            $table->string('empresa_password');
            $table->string('empresa_rol');
            $table->integer('empresa_validat')->default(0);
            $table->string('empresa_nif')->default("");
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
