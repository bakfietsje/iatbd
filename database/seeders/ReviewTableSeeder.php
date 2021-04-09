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
            'User' => "Horse",
            'Inhoud' => "Kk goeie product ouwe",
            'Poster' => "Iemand anders",
        ]);
        
        DB::table('review')->insert([
            'User' => "s1122328",
            'Inhoud' => "Kk goeie product ouwe",
            'Poster' => "Iemand anders",
        ]);
    }
}
