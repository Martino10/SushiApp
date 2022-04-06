<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Martin Krikke",
            'email' => "martin.krikke10@gmail.com",
            'password' => bcrypt("Kraakmanisin"),
            'age' => 21,
            'role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name' => "Kleine Martin",
            'email' => "martin.krikke@ziggo.nl",
            'password' => bcrypt("Feyenoord123"),
            'age' => 15,
        ]);
    }
}
