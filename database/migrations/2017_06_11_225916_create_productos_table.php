<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',60)->required();
            $table->string('categoria',60)->required();
            $table->integer('cantidad')->required();
            $table->string('precio',60)->required();
            $table->string('descripcion')->required();
            $table->string('rut',12)->required();
            $table->foreign('rut')->references('rut')->on('users');
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
        Schema::drop('productos');
    }
}
