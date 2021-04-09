<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ImagesTableSeeder::class,
            KindOfProductTableSeeder::class,
            ProductGereedschapTableSeeder::class,
            ProductMeubilairTableSeeder::class,
            ProductHardwareTableSeeder::class,
            ProductSchoonmaakSpullenTableSeeder::class,
            ProductElektronicaTableSeeder::class,
            infoOfProductTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            ReviewTableSeeder::class,
            
            

        ]);
        
    }
}
