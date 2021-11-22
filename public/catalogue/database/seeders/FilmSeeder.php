<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Etape 1
      /*  DB::table('films')->insert([
            'category_id' => rand(1,10),
            'name' => Str::random(10),
            'director' => Str::random(10),
            'path' => Str::random(10)
             
            ]);*/

        //Etape 2
        \App\Models\Film::factory(40)->create();
    }
}