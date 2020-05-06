<?php

use Illuminate\Database\Seeder;

class jsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jslessons')->insert([
            'name' => 'testing',
            'type' => 'Basic',
            'duration' => 'four weeks',
        ]);
    }
}
