<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //CONSTRAINT fk_1 FOREIGN KEY(id_all) REFERENCES user_all(id_all) ON DELETE CASCADE ON UPDATE CASCADE


     public function up()
    {
        Schema::create('user_fbs', function (Blueprint $table) {
            $table->id();
            //Datos para la farmacia
            $table->double('latitude_fb')->nullable();
            $table->double('longitude_fb')->nullable();
            //
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->double('cali_fb');
            $table->enum('requi_complete',['si','no']);
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
        Schema::dropIfExists('user_fbs');
    }
}
