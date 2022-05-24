<?php

use Illuminate\Database\Seeder;

class comments_general_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\comments_general::create(['comentario'=>'Me parece que esta página es muy buena, me ayudo a curarme del covid.','user_com'=>'Railly Hugo','user_sex'=>'masculino']);
        App\comments_general::create(['comentario'=>'Encontre precios muy buenos en esta página, la recomiendo a mis colegas.','user_com'=>'Alexis Arias','user_sex'=>'masculino']);
        App\comments_general::create(['comentario'=>'Gracias a esta página encontre una farmacia cercana a mi casa,saludos :).','user_com'=>'Maria Mercedes','user_sex'=>'femenino']);
        App\comments_general::create(['comentario'=>'Tengo una queja sobre Inkafarma: me cobran más caro de lo que muestran.','user_com'=>'Leslie Sandoval','user_sex'=>'femenino']);
    }
}
