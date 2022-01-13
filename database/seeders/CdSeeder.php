<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class CdSeeder extends Seeder
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
            DB::table('c_d_s')->insert([
                'name'=>$faker->name(),
                'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero eaque
                 recusandae vitae doloremque est
                  reiciendis magnam harum minima! At, consequuntur!',
                'images'=>'cds_1641884761.jpg',
                'price'=>$faker->numerify('###'),
            ]);
        }
    }
}
