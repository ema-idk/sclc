<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarberosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barberos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->string('estado');
            $table->string('telefono');
            $table->string('foto');

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
        Schema::dropIfExists('barberos');
    }
}
