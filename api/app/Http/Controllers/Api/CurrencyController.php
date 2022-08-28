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
// affiche les données sur les devises
    public function index()
    {
        $currency = Currency::all();
        return response()->json([
            'status' => true,
            'currencies'=> $currency,
        ]);
    }

    public function store(StoreCurrencyRequest $request)
    {
        $currency = Currency::create($request->all());
        // dd($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency' => $currency
        ],200);
    }
// affiche les données sur les devises selon id
    public function show( $id)
    {
        $currency = Currency::find($id);
        // dd($currency);
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency' => $currency
        ],200);
    
    }

    //method put
    public function update(Request $request, Currency $currency)
    {
        $currency->update($request->all());
        return response()->json([
            'status' => true,
            'message'=>"ok",
            'currency' => $currency
        ],200);
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return response()->json([
            'status' => true,
            'message' => "supprimer"
        ], 200);
    }
}
