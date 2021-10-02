<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run() {
  DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
  DB::table('users')->insert([
    'name' => 'majid',
    'email' => 'majid@gmail.com',
    'role' => 'admin',
    'password' => Hash::make('123'),
  ]);
  DB::table('users')->insert([
    'name' => 'talha',
    'email' => 'talha@gmail.com',
    'role' => 'user',
    'password' => Hash::make('123'),
  ]);
  DB::table('users')->insert([
    'name' => 'zahid',
    'email' => 'zahid@gmail.com',
    'role' => 'operator',
    'password' => Hash::make('123'),
  ]);

  DB::table('users')->insert([
    'name' => 'jamal',
    'email' => 'jamal@gmail.com',
    'role' => 'manager',
    'password' => Hash::make('123'),
  ]);
}
}
