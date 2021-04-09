<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductMeubilairTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meubilair_product_array = ["Bank", "Stoel", "Tafel"];

        foreach ($meubilair_product_array as $meubilair) {
            DB::table('product')->insert([
                'name' => $meubilair,
                'kind' => "Meubilair",
                'image' => '/image/Meubilair.jpeg',
                'description' => "Een " . $meubilair . " van de categorie meubilair",
                'owner' => 'Iemand',
                'uitgeleend_aan' =>  'Niemand',
            ]);
        }
    }
}
