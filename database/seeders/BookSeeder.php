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
        foreach (range(1,100) as $value) {
            DB::table('books')->insert([
                'name'=>$faker->name(),
                'desc'=>'Lorem ipsum dolor sit ame
                t consectetur adipisicing elit. Vero eaque r
                ecusandae vitae doloremque est reiciendis 
                magnam harum minima! At, consequuntur!',
                'images'=>'books_1641885753.jpg',
                'price'=>$faker->numerify('###'),
            ]);
        }
    }
}
