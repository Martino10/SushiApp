<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KindOfSushiTableSeeder::class,
            MakiTableSeeder::class,
            NigiriTableSeeder::class,
            SashimiTableSeeder::class,
            TemakiTableSeeder::class,
            UramakiTableSeeder::class,
            KindOfDrinksTableSeeder::class,
            BeerTableSeeder::class,
            WineTableSeeder::class,
            SakeTableSeeder::class,
            ImagesTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
