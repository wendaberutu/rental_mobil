<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    
        DB::table('users')->insert([
            [
                
                'name' => 'Wenda',
                'email' => 'wendaberutu07@gmail.com',
                'password' => 'wenda25',
                 
            ] 
        ]);

    }
}
