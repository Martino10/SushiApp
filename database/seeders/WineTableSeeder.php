<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class WineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wine_array = ["Pinot", "Chardonnay", "Sauvignon Blanc"];

        foreach($wine_array as $wine) {
            DB::table('drinks')->insert([
                'name' => $wine,
                'kind' => "Wine",
                'image' => "/img/" . strtolower($wine) . "_wine.png",
                'description' => "A classic fine " . $wine, 
            ]);
        }
    }
}
