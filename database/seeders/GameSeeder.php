<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        foreach (range(1,100) as $value) {
            # code...
            DB::table('games')->insert([
                'name'=>$faker->name(),
                'desc'=>'Lorem ipsum dolor sit amet
                 consectetur adipisicing elit. Vero eaque recusandae
                 vitae doloremque est reiciendis 
                 magnam harum minima! At, consequuntur!',
                'images'=>'mario_1640700275.jpg',
                'price'=>$faker->numerify('###'),
            ]);
        }

    }
}
