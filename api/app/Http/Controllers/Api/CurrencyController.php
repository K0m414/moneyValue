<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Pair;
// $pair = Pair::all()

use Illuminate\Http\Request;
use App\Http\Requests\StoreCurrencyRequest;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::all();
        return response()->json([
            'status' => true,
            'currencies'=> $currency,
        ]);
    }
    public function exchange()
    {
        $currency = Currency::pluck('id');
        $pairA = Pair::all()->where("currency_id_a", $currency)->pluck("exchange_rate_a_to_b")->implode('0 => ', );
        $pairB = Pair::all()->where("currency_id_b", 8)->pluck("exchange_rate_b_to_a");
        // $convert = $pairA * $pairB;
        dd($pairA+7979);
    }
    
    public function convert($pair_id, $value)
    {
        $pairA = Pair::all()->where("currency_id_a", $pair_id)->pluck("exchange_rate_a_to_b")->implode('0 => ', ); // taux de change
        $pairB = Pair::all()->where("currency_id_b", $pair_id)->pluck("exchange_rate_b_to_a")->implode('0 => ', ); 

        if($pairA){
            $result = $pairA * $value; //taux de change * montant entré
        }
        else{
            $result = $pairB * $value;
        }
        // if(!$result){
        //     // convertCount();
        //     $pair->update(Pair::all()->where("currency_id_a", $pair_id)->pluck('count'));
        //     return response()->json([
        //     'status' => true,
        //     'message'=>"ok",
        //     'post' => $pair
        // ],200);
        // }
        return $result;
    }
    // public function convertCount(Request $request, Pair $pair)
    // {
        
    // }
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
    // method post
    public function store(StoreCurrencyRequest $request)
    {
        $currency = Currency::create($request->all());
        // dd($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'post' => $currency
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    //method put
    public function update(Request $request, Currency $currency)
    {
        $currency->update($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'post' => $currency
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();
        return response()->json([
            'status' => true,
            'message' => "supprimer"
        ], 200);
    }
}
