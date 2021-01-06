<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            User::create([
                'name'=> $faker->name,
                'lastname'=> $faker->name,
                'document'=> $faker->sentence,
            ]);
    }
}
}
