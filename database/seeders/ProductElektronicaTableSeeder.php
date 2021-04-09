<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductElektronicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elektronica_product_array = ["Arduino", "Bureaulamp", "USB kabel"];

        foreach($elektronica_product_array as $elektronica)
        {
            DB::table('product')->insert([
                'name' => $elektronica,
                'kind' => "Elektronica",
                'image' => '/image/Elektronica.jpeg',
                'description' => "Een " . $elektronica . " van de categorie elektronica",
                'owner' => 'Iemand',
                'uitgeleend_aan' =>  'Niemand',
            ]);
            
            
        }
    }
}
