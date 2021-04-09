<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Auth;

class ProductGereedschapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gereedschap_product_array = ["Schroevendraaier", "Boormachine", "Hamer", "Verfkwast"];

        foreach ($gereedschap_product_array as $gereedschap) {
            DB::table('product')->insert([
                'name' => $gereedschap,
                'kind' => "Gereedschap",
                'image' => '/image/Gereedschap.jpeg',
                'description' => "Een " . $gereedschap . " van de categorie gereedschap",
                'owner' => 'Iemand',
                'uitgeleend_aan' =>  'Niemand',
            ]);
        }
    }
}
