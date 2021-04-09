<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ["Gereedschap.jpeg", "Schoonmaakspullen.jpeg", "Elektronica.jpeg", "Hardware.jpeg", "Meubilair.jpeg"];
        foreach($images_array as $image)
            DB::table('images')->insert([
                'image' => '/image/' . $image
        ]);
    }
}
