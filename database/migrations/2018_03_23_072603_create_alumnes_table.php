<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('alumnes', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('alumne_nom');
            $table->string('alumne_email')->unique();
            $table->string('alumne_password');
            $table->string('alumne_rol');
            $table->integer('alumne_validat')->default(0);
    		$table->string('alumne_cognom1')->default("");
            $table->string('alumne_cognom2')->default("");
            $table->string('alumne_experiencia')->default("");
            $table->string('alumne_dni')->default("")->unique();
            $table->string('alumne_telefon')->default("");
            $table->integer('alumne_carnet')->default(0);
            $table->integer('alumne_tempsTotal')->default(0);
            $table->string('estudis_sigles');
            $table->foreign('estudis_sigles')->references('sigles')->on('estudis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('alumnes');
    }
}
