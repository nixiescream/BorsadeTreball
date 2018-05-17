<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumneOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumne_oferta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumne_user_id')->unsigned();
            $table->foreign('alumne_user_id')->references('user_id')->on('alumnes')->onDelete('cascade');
            $table->integer('oferta_id')->unsigned();
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');
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
        Schema::dropIfExists('alumne_oferta');
    }
}
