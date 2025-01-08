<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [

                'name' => 'Drama'
            ],
            [
                'name' => 'Kids'
            ],
            [
                'name' => 'TV Show'
            ]
        ]);
    }
}
