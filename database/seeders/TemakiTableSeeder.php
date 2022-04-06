<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TemakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temaki_array = ["Tuna", "California", "Tori", "Sake", "Ebi", "Veggie"];

        foreach ($temaki_array as $temaki) {
            DB::table('sushi')->insert([
                'name' => $temaki,
                'kind' => "Temaki",
                'image' => '/img/' . strtolower($temaki) . '_temaki.png',
                'description' => "Mooie Temaki " . $temaki,
            ]);
        }
    }
}
