<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();

        $faker = \Faker\Factory::create();

        for ($j = 0; $j < 100; $j++) {
            Movie::create([
                'name' => $faker->name,
                'code' => $faker->sentence,
                'year' => $faker->year(1950, 2021),
                'available'=> $faker->boolean(true),
            ]);
        }

    }
}
//$table->string('name',255);
//$table->string('code',80);
//$table->double('year');
//$table->boolean('available');
