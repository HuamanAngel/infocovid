<?php

use Illuminate\Database\Seeder;

class user_space_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\user_space::create(['name_space' =>'Inkafarma','descripcion'=>'Los mejores precios siempre', 'user_fb_id'=>1]);
        App\user_space::create(['name_space' =>'Mi Farma','descripcion'=>'Las mejores ofertas', 'user_fb_id'=>2]);
        App\user_space::create(['name_space' =>'Fisifarma','descripcion'=>'Ofrecemos productos de la mejor calidad', 'user_fb_id'=>3]);
        App\user_space::create(['name_space' =>'Arcángel','descripcion'=>'Ofrecemos productos mas batatos que los demás', 'user_fb_id'=>4]);
        App\user_space::create(['name_space' =>'Covidfarma','descripcion'=>'Atención de calidad', 'user_fb_id'=>5]);
        App\user_space::create(['name_space' =>'Solo gatos','descripcion'=>'Las mejores tiendas', 'user_fb_id'=>6]);

    }
}
