<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaMedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('especialidade');
            $table->string('celular');
            $table->text('descricao');
            $table->string('foto');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::dropIfExists('medicos');
    }
}
