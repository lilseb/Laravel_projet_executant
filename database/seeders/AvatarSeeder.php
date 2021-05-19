<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            ['image'=>'image1.jpg'],
            ['image'=>'image2.jpg'],
            ['image'=>'image3.jpg'],

        ]);
    }
}
