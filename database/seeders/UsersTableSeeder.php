<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Victor Luijt",
            'email' => "s1122328@student.hsleiden.nl",
            'password' => bcrypt('laravel'),
            'role' => 'Admin',
        ]);

        DB::table('users')->insert([
            'name' => "Horse",
            'email' => "horse@horse.nl",
            'password' => bcrypt('laravel'),
            'role' => 'Admin',
        ]);
    }
}
