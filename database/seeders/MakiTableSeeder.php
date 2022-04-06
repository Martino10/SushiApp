<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maki_array = ["Cumcumber", "Tamago", "Tuna", "Sake", "Kani"];

        foreach ($maki_array as $maki) {
            DB::table('sushi')->insert([
                'name' => $maki,
                'kind' => "Maki",
                'image' => '/img/' . strtolower($maki) . '_maki.png',
                'description' => "Mooie Maki " . $maki,
            ]);
        }
    }
}
