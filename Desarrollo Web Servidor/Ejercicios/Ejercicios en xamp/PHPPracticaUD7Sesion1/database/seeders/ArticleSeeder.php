<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncamos la tabla para comenzar con una vacía.
        Article::truncate();
 
        $faker = \Faker\Factory::create();                      // Creamos cosas de forma ficticia
         // Ahora creamos los nuevos artículos de prueba:
         for ($i = 0; $i < 50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }

    }

