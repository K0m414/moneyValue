<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Convert;
use App\Models\Pair;

use Illuminate\Http\Request;
use App\Models\Currency;

class ConvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($pair_id, $value)
    {
        $exhangeRateAToB = Pair::all()->where("id", $pair_id)->pluck("exchange_rate_a_to_b")->implode('0 => ', ); // taux de change
        $exhangeRateBToA = Pair::all()->where("id", $pair_id)->pluck("exchange_rate_b_to_a")->implode('0 => ', ); // taux de change

        $currency_id_a = Pair::all()->where("id", $pair_id)->pluck("currency_id_a")->implode('0 => ', ); // taux de change
        $currency_id_b = Pair::all()->where("id", $pair_id)->pluck("currency_id_b")->implode('0 => ', ); // taux de change
        $currencyNameA = Currency::all()->where("id", $currency_id_a)->pluck("currency_name"); // taux de change
        $currencyNameB = Currency::all()->where("id", $currency_id_b)->pluck("currency_name")->implode('0 => ', ); // taux de change


// dd($currencyNameB);

            $resultAToB = $exhangeRateAToB * $value; //taux de change * montant entré
            $resultBToA = $exhangeRateBToA * $value;
        

        $count = Pair::all()->where("id", $pair_id)->pluck("count")->implode('0 => ', );
        $product = Pair::find($pair_id);
        // $count = $count++;
        $product->update([
                    'count'  => $count+1
                ]);

        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency_name_a' => $currencyNameA,
            'currency_name_b' => $currencyNameB,
            'convert_a_to_b' => $resultAToB,
            'convert_b_to_a' => $resultBToA,
            'count'=>$count+1,
            
        ],200);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convert  $convert
     * @return \Illuminate\Http\Response
     */
    public function show(Convert $convert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convert  $convert
     * @return \Illuminate\Http\Response
     */
    public function edit(Convert $convert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convert  $convert
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Convert $convert)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convert  $convert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convert $convert)
    {
        //
    }
}
