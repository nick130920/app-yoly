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
          'name' => 'juan',
          'email' => 'juanca@gmai.com',
          'password' => bcrypt('nicolas1309')
        ]);
    }
}
