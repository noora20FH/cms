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
        DB::table('shops')->insert([
            'name' => 'Carrot',
           'content' => 'Carrots contain carotene, which the body converts to vitamin A and is essential for good vision, healthy bones, cell reproduction and growth as well as supporting the immune system and skin health. Carrots also contain the essential minerals calcium, phosphorus and potassium.'
            ],
            [
                'name' => 'Tomato',
               'content' => 'Tomatoes are a rich source of lycopene, lutein, and beta-carotene. These are powerful antioxidants that have been shown to protect the eyesTrusted Source against light-induced damage, the development of cataracts, and age-related macular degeneration (AMD).'
                ],
            
                [
                    'name' => 'Beans',
                   'content' => 'Nuts have impressive effects on cholesterol and triglyceride levels.Pistachios have been shown to lower triglycerides in people who are obese and those with diabetes. In one 12-week study in obese people, those eating pistachios had triglyceride levels nearly 33% lower than in the control group (14Trusted Source, 22Trusted Source). The cholesterol-lowering power of nuts may be due to their high content of monounsaturated and polyunsaturated fatty acids.'
                    ]);
    }
}
