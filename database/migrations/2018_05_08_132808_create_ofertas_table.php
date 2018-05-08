<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titol');
            $table->string('descripcio');
            $table->integer('sou');
            $table->string('horari');
            $table->string('tipus');
            $table->string('estudis_emprats');
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('user_id')->on('empresas')->onDelete('cascade');
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
        Schema::dropIfExists('ofertas');
    }
}
