<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('user_medis', function (Blueprint $table) {
            $table->id();
            $table->string('name_medi',50)->required();
            $table->float('precio_med')->nullable();
            $table->string('descripcion_medi',100)->nullable();
            $table->string('tipo_medicamento',50)->nullable();
            $table->integer('cantidad')->nullable();
            $table->foreignId('user_space_id')->references('id')->on('user_spaces')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('user_medis');
    }
}
