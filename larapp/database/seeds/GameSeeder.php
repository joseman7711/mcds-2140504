<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('games')->insert([
            'name'          => 'God of War', 
            'description'   => 'Desarrollado por Sony',
            'user_id'       => 1,
            'category_id'   => 2,
            'price'         => 60,
            'slider' => 1,
            'created_at'    => now(),
        ]);

        $game = new Game;
        $game->name           = 'Horizon';
        $game->description    = 'Desarrollado por no sé quién';
        $game->user_id        = 1;
        $game->category_id    = 1;
        $game->price          = 50;
        $game->slider         = 1;
        $game->save();
    }
}
