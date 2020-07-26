<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransferenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('id_origen')->unsigned();
            $table->integer('id_destino')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_origen')->references('id')->on('depositos');
            $table->foreign('id_destino')->references('id')->on('depositos');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transferencias');
    }
}
