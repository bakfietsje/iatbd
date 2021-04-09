<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class infoOfProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->where('name', 'schroevendraaier')->update([
            'info' => "Schroevendraaier met 2 kleuren",
        ]);
        DB::table('product')->where('name', 'Boormachine')->update([
            'info' => "Bosch boormachine met 2 functies",
        ]);
        DB::table('product')->where('name', 'Hamer')->update([
            'info' => "Robuuste rubberen hamer voor camping gebruik",
        ]);
        DB::table('product')->where('name', 'Verfkwast')->update([
            'info' => "Goede verfkwast van IKEA",
        ]);
    }
}
