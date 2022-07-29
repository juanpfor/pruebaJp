<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('photo');
                $table->unsignedBigInteger('id_raza');
                $table->unsignedBigInteger('id_genero');
           //forrign raza de
                $table->foreign('id_raza')->references('id')->on('razas')->onDelete('cascade')->onUpdate('cascade');
           //forrign genero
                $table->foreign('id_genero')->references('id')->on('generos')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('mascotas');
    }
}
