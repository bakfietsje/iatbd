<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductHardwareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hardwareproduct_array = ["Computer", "Muis", "Monitor"];

        foreach ($hardwareproduct_array as $hardware) {
            DB::table('product')->insert([
                'name' => $hardware,              
                'kind' => "Hardware",
                'image' => '/image/Hardware.jpeg',
                'description' => "Een " . $hardware . " van de categorie hardware",
                'owner' => 'Iemand',
                'uitgeleend_aan' =>  'Niemand',
            ]);
        }
    }
}
