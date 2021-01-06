<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 3; $i++){
            Genre::create([
                'name'=> $faker->word
            ]);
        }
    }
}
