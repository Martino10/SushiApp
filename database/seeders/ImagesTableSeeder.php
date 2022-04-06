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
        $images_array = DB::table('sushi')->pluck('image');
        foreach ($images_array as $image) {
            DB::table('images')->insert([
                'image' => $image,
            ]);
        }
    }
}
