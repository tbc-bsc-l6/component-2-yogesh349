<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker=Faker::create();
        foreach (range(1,15) as $value) {
            DB::table('books')->insert([
                'name'=>$faker->name(),
                'desc'=>$faker->regexify('[A-Za-z0-9]{50}'),
                'images'=>'mario_1640700275.jpg',
                'price'=>$faker->numerify('###'),
            ]);
        }
    }
}
