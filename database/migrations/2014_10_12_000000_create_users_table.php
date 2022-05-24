<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario',20)->required();
            $table->string('password',100)->required();
            $table->string('correo_recu',40)->required();
            $table->string('distrito',40)->required();

            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->enum('sexo',['femenino','masculino'])->required();
            $table->string('telefono',12)->nullable();
            $table->string('ubicacion_establecimiento',40)->nullable();
            $table->string('video_muestra')->nullable();
            $table->string('documentos')->nullable();
            $table->enum('tipo',['botica','farmacia'])->nullable();
            $table->timestamp('correo_recu_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
