<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SashimiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sashimi_array = ["Sake", "Tuna", "Mix"];

        foreach ($sashimi_array as $sashimi) {
            DB::table('sushi')->insert([
                'name' => $sashimi,
                'kind' => "Sashimi",
                'image' => '/img/' . strtolower($sashimi) . '_sashimi.png',
                'description' => "Beetje mid Sashimi " . $sashimi,
            ]);
        }
    }
}
