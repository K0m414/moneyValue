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
        // création de détails sur les devises
        Currency::create(["currency_code" =>"ARS" , "currency_name" => "Argentine Peso" , "currency_symbol" => "$" ]);
        Currency::create(["currency_code" =>"AUD" , "currency_name" => "Australian Dollar" , "currency_symbol" => "$" ]);
        Currency::create(["currency_code" =>"CAD" , "currency_name" => "Canadian Dollar" , "currency_symbol" => "$" ]);
        Currency::create(["currency_code" =>"CHF" , "currency_name" => "Swiss Franc" , "currency_symbol" => "CHF" ]);
        Currency::create(["currency_code" =>"CNY" , "currency_name" => "Yuan Renminbi" , "currency_symbol" => "¥" ]);
        Currency::create(["currency_code" =>"EUR" , "currency_name" => "Euro" , "currency_symbol" => "€" ]);
        Currency::create(["currency_code" =>"JPY" , "currency_name" => "Yen" , "currency_symbol" => "¥" ]);
        Currency::create(["currency_code" =>"USD" , "currency_name" => "US Dollar" , "currency_symbol" => "$" ]);

    }
}
