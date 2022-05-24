<?php

use Illuminate\Database\Seeder;

class user_comment_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\user_comment::create(['comentario'=>'La peor farmacia, no la recomiendo, no vayan porque los estafan >:v','us_com'=>'Pedro','us_sex'=>'masculino','calif'=>1,'user_id'=>3]);
        App\user_comment::create(['comentario'=>'Atencion regular, precios no muy elevados, no tengo quejas','us_com'=>'Pablo','us_sex'=>'masculino','calif'=>3,'user_id'=>3]);
        App\user_comment::create(['comentario'=>'Buena farmacia, me gusto mucho la atencion que recibi, ambiente impecable','us_com'=>'Chris','us_sex'=>'femenino','calif'=>5,'user_id'=>3]);


        App\user_comment::create(['comentario'=>'Tienen los precios muy caros, mejor vayan a MiFarma','us_com'=>'Lalo','us_sex'=>'masculino','calif'=>1,'user_id'=>4]);
        App\user_comment::create(['comentario'=>'Los bonos por puntos y promociones son fabulosas, me encanto','us_com'=>'Rya','us_sex'=>'femenino','calif'=>5,'user_id'=>4]);

    }
}
