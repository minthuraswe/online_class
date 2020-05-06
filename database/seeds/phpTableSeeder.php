<?php

use Illuminate\Database\Seeder;

class phpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phplessons')->insert([
            'name' => 'testing',
            'type' => 'Intermediate',
            'duration' => '6 weeks',
        ]);
    }
}
