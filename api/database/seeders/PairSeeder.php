<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pair;

class PairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //création taux de change
        Pair::create(["currency_id_a" =>1 , "currency_id_b" => 8 , "exchange_rate_a_to_b" => 1.5, "exchange_rate_b_to_a" => 2.1]);
        Pair::create(["currency_id_a" =>2 , "currency_id_b" => 7 , "exchange_rate_a_to_b" => 5.1, "exchange_rate_b_to_a" => 1.6]);
        Pair::create(["currency_id_a" =>3 , "currency_id_b" => 6 , "exchange_rate_a_to_b" => 1.6, "exchange_rate_b_to_a" => 1.14]);
        Pair::create(["currency_id_a" =>4 , "currency_id_b" => 5 , "exchange_rate_a_to_b" => 3.5, "exchange_rate_b_to_a" => 3.1]);
    }
}
