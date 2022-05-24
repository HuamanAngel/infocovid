<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_as', function (Blueprint $table) {
            $table->id();
            $table->string('tipo',50);
            $table->string('imagen',100);
            $table->string('fuente',40);
            $table->string('descripcion',150);
            $table->string('url',200);
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
        Schema::dropIfExists('noticias_as');
    }
}
