<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops_table0')->insert([
            'name' => 'Carrot',
           'content' => 'Carrots contain carotene, which the body converts to vitamin A and is essential for good vision, healthy bones, cell reproduction and growth as well as supporting the immune system and skin health. Carrots also contain the essential minerals calcium, phosphorus and potassium.'
            ]);
    }
}
