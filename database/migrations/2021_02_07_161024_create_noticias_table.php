<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 100);
            $table->string('autor', 30);
            $table->date('fecha');
            $table->string('portada');
            $table->string('parrafo1', 450);
            $table->string('parrafo2', 450);
            $table->string('parrafo3', 450);
            $table->string('parrafo4', 450)->nullable();
            $table->string('foto')->nullable();
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
