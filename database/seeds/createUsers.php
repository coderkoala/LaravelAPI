<?php

use Illuminate\Database\Seeder;

class createUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        // $this->call(UsersTableSeeder::class);

        $faker = Faker\Factory::create();

        $password = \Illuminate\Support\Facades\Hash::make('balaju');

        \Illuminate\Foundation\Auth\User::create([
            'name' => 'admin',
            'email' => 'iamtribulation@outlook.com',
            'password'=> $password,
        ]);

        for($i = 0; $i< 10; $i++) {
            \Illuminate\Foundation\Auth\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
