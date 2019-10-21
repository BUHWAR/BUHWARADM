<?php

use Illuminate\Database\Seeder;
use  BUHWAR\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        $user = new User;
        $user->name = "Jesus Ramirez Vargas";
        $user->email="jesus21c.jrv@gmail.com";
        $user->password=bcrypt('secret'); 
        $user->save();

        BUHWAR\User::create([
            'name' => 'Ivan Galves Arellano',
            'email' => 'igalves1812@hotmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
    }
}
