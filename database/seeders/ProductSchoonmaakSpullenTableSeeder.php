<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductSchoonmaakSpullenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schoonmaakspullen_product_array = ["WC ontstopper", "Afwasborstel", "Stofzuiger"];

        foreach ($schoonmaakspullen_product_array as $schoonmaakspullen) {
            DB::table('product')->insert([
                'name' => $schoonmaakspullen,
                'kind' => "Schoonmaakspullen",
                'image' => '/image/Schoonmaakspullen.jpeg',
                'description' => "Een " . $schoonmaakspullen . " van de categorie schoonmaakspullen",
                'owner' => 'Iemand',
                'uitgeleend_aan' =>  'Niemand',
            ]);
        }
    }
}
