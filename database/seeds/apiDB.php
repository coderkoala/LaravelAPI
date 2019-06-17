<?php

use Illuminate\Database\Seeder;

class apiDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\apiDb::truncate();

        $faker =\Faker\Factory::create();
        for ($i = 0; $i < 150; $i++) {
            \App\apiDb::create([
                'name' => $faker->firstName,
                'lname' => $faker->lastName,
                'dob' => $faker->dateTime,
                'addr' => $faker->address,
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
