<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Currency;
class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create(["currency_code" =>"ARS" , "currency_name" => "Argentine Peso" , "currency_symbol" => "$" ]);
        Currency::create(["currency_code" =>"AUD" , "currency_name" => "Australian Dollar" , "currency_symbol" => "$" ]);
        Currency::create(["currency_code" =>"CAD" , "currency_name" => "Canadian Dollar" , "currency_symbol" => "$" ]);
        Currency::create(["currency_code" =>"CHF" , "currency_name" => "Swiss Franc" , "currency_symbol" => "CHF" ]);
        Currency::create(["currency_code" =>"CNY" , "currency_name" => "Yuan Renminbi" , "currency_symbol" => "¥" ]);
        Currency::create(["currency_code" =>"EUR" , "currency_name" => "Euro" , "currency_symbol" => "€" ]);
        Currency::create(["currency_code" =>"JPY" , "currency_name" => "Yen" , "currency_symbol" => "¥" ]);
        Currency::create(["currency_code" =>"USD" , "currency_name" => "US Dollar" , "currency_symbol" => "$" ]);

        
        // DB::table("currencies")->insert([
        //     ["currency_code" =>"ARS" , "currency_name" => "Argentine_Peso" , "currency_symbol" => "$" , "currency_value" => 2.1 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"AUD" , "currency_name" => "Australian_Dollar" , "currency_symbol" => "$" , "currency_value" => 6.4 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"CAD" , "currency_name" => "Canadian_Dollar" , "currency_symbol" => "$" , "currency_value" => 40.99 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"CHF" , "currency_name" => "Swiss_Franc" , "currency_symbol" => "CHF" , "currency_value" => 54.4 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"CNY" , "currency_name" => "Yuan_Renminbi" , "currency_symbol" => "¥" , "currency_value" => 2.7 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"EUR" , "currency_name" => "Euro" , "currency_symbol" => "€" , "currency_value" => 71.666 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"JPY" , "currency_name" => "Yen" , "currency_symbol" => "¥" , "currency_value" => 140.5 ,"currency_exchange_rate" =>  1],
        //     ["currency_code" =>"USD" , "currency_name" => "US_Dollar" , "currency_symbol" => "$" , "currency_value" => 1 ,"currency_exchange_rate" => 1],
        // ]);
    }
}
