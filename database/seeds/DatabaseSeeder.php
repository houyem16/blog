<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => "claude@gmail.com",
            "password" => Hash::make("jean")
        ]);
        User::create([
            'email' => "francis@gmail.com",
            "password" => Hash::make("benoit")
        ]);

         $this->call('UsersTableSeeder');
    }
}
