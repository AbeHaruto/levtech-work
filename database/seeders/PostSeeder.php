<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => 1,
            'title' => 'DESTINY 鎌倉ものがたり',
            'body' => 'まじヤバイ',
            'image_url' => 'https://res.cloudinary.com/drdnsqqwu/image/upload/v1671884950/tu5ihaiyl8fh2rjhq9sa.jpg',
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'id' => 2,
            'title' => 'kingsman',
            'body' => '超面白い',
            'image_url' => 'https://res.cloudinary.com/drdnsqqwu/image/upload/v1671884876/fgz0ethc3ednp68njmjj.jpg',
            'category_id' => 2,
            'user_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'id' => 3,
            'title' => 'ONE PIECE FILM RED',
            'body' => 'シャンクスがかっこよすぎる',
            'image_url' => 'https://res.cloudinary.com/drdnsqqwu/image/upload/v1671776842/usrt42kcfp0gvf2ug7rz.jpg',
            'category_id' => 3,
            'user_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
