<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'nick',
          'email' => 'namc1309@gmail.com',
          'password' => bcrypt('nicolas1309'),
          'admin' => true

        ]);
    }
}
