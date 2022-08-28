<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // appel au seeder déjà créé
        $this->call(CurrencySeeder::class);
        $this->call(PairSeeder::class);
        $this->call(UserSeeder::class);


    }
}
