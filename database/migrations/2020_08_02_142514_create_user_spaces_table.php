<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */




    public function up()
    {
        Schema::create('user_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('name_space',30)->required();
            $table->text('descripcion');
            $table->foreignId('user_fb_id')->references('id')->on('user_fbs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('user_spaces');
    }
}
