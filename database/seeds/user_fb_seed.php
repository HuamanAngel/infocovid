<?php

use Illuminate\Database\Seeder;

class user_fb_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\user_fb::create(['latitude_fb'=>-11.98140,'longitude_fb'=>-77.1,'user_id' =>3,'cali_fb'=>0,'requi_complete'=>'si']);
        App\user_fb::create(['latitude_fb'=>-11.99140,'longitude_fb'=>-77.11,'user_id' =>4,'cali_fb'=>0,'requi_complete'=>'no']);
        App\user_fb::create(['latitude_fb'=>-12.0,'longitude_fb'=>-77.115,'user_id' =>5,'cali_fb'=>20,'requi_complete'=>'si']);
        App\user_fb::create(['latitude_fb'=>-11.840,'longitude_fb'=>-77.12,'user_id' =>6,'cali_fb'=>9,'requi_complete'=>'no']);
        App\user_fb::create(['latitude_fb'=>-11.88140,'longitude_fb'=>-77.125,'user_id' =>7,'cali_fb'=>2,'requi_complete'=>'si']);
        App\user_fb::create(['latitude_fb'=>-11.98140,'longitude_fb'=>-77.13,'user_id' =>8,'cali_fb'=>4,'requi_complete'=>'si']);

    }
}
