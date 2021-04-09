<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'User' => "Mees",
            'Inhoud' => "Matig product!",
            'Poster' => "Henk",
        ]);
        
        DB::table('review')->insert([
            'User' => "Diederik",
            'Inhoud' => "Super fijn product, bedankt",
            'Poster' => "Gerrit",
        ]);
    }
}
