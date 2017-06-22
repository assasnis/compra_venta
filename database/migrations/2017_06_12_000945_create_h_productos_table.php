<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',60);
            $table->string('categoria',60);      
           
            $table->string('precio',60);
            $table->string('descripcion');
            $table->string('rut',12);
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
        Schema::drop('h_productos');
    }
}
