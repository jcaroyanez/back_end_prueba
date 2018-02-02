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
      USer::truncate();

      $faker = \Faker\Factory::create();

      $password = Hash::make('toptal');

      User::create([
          'name' => 'administrador',
          'email' => 'admin@test.com',
          'password' => $password, 
      ]);

      for($i = 0; $i < 50 ; $i++){
        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $password, 
        ]);
      }
    }
}
