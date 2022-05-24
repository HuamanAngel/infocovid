<?php

use App\user_space;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(user_comment_seed::class);
        $this->call(user_fb_seed::class);
        $this->call(user_space_seed::class);
        $this->call(user_medi_seed::class);
        $this->call(establecimientos_seed::class);
        $this->call(noticias_as_seed::class);
        $this->call(comments_general_seed::class);
    }
}