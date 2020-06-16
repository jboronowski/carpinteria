<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlmacensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto');
            $table->string('materiaprima');
            $table->integer('patrimonio');
            $table->string('desc');
            $table->string('actual');
            $table->string('minimo');
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('almacens');
    }
}
