<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UramakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uramaki_array = ["Ebi", "Sake", "Unagi", "Dragon roll", "California", "Chicken", "tuna"];

        foreach ($uramaki_array as $uramaki) {
            DB::table('sushi')->insert([
                'name' => $uramaki,
                'kind' => "Uramaki",
                'image' => '/img/' . strtolower($uramaki) . '_uramaki.png',
                'description' => "Mooie uramaki " . $uramaki,
            ]);
        }
    }
}
