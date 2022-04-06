<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NigiriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nigiri_array = ["Maguro", "Sake", "Amaebi", "Ebi", "Tamago", "Anago"];

        foreach ($nigiri_array as $nigiri) {
            DB::table('sushi')->insert([
                'name' => $nigiri,
                'kind' => "Nigiri",
                'image' => '/img/' . strtolower($nigiri) . '_nigiri.png',
                'description' => "Mooie nigeri " . $nigiri,
            ]);
        }
    }
}
