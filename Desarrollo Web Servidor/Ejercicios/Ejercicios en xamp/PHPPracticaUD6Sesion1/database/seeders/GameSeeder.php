<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         DB::table('games')->insert([
            'title' => 'Mega Man 2',
            'publisher' => 'Capcom',
            'releasedate' => '1989',
        ]);
 
        DB::table('games')->insert([
            'title' => 'Metroid',
            'publisher' => 'Nintendo',
            'releasedate' => '1986',
        ]);
 
        DB::table('games')->insert([
            'title' => 'Tecmo Bowl',
            'publisher' => 'Koei Tecno',
            'releasedate' => '1989',
        ]);   

    }
}
