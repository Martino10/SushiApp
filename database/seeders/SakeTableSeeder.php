<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sake_array = ["Daiginjo", "Junmai", "Honjozo"];

        foreach($sake_array as $sake) {
            DB::table('drinks')->insert([
                'name' => $sake,
                'kind' => "Sake",
                'image' => "/img/" . strtolower($sake) . "_sake.png",
                'description' => "A delicious Sake from Japan called " . $sake, 
            ]);
        }
    }
}
