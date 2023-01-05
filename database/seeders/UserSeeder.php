<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'HarutoAbe',
            'email' => 'haru.dolphins6@gmail.com',
            'password' => Hash::make('AdminHaruto_0326'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'guest',
            'email' => '208408@st.takushoku-u.ac.jp',
            'password' => Hash::make('Guest0000'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
