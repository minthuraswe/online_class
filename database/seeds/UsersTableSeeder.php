<?php

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
        DB::table('users')->insert([
            'name' => 'mg thar cho',
            'isAdmin' => '1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('minthuraswe'),
        ]);

        DB::table('users')->insert([
            'name' => 'kyaw Gyi',
            'isAdmin' => '0',
            'email' => 'user@gmail.com',
            'password' => Hash::make('minthuraswe'),
        ]);


    }
}
