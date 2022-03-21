<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Food $food, Request $request)
    {
        $foods = Http::withOptions([
            'query' => [
                'api_key' => env('API_KEY', 'DEMO_KEY'),
                'query' => $request ?? '',
                'dataType' => 'Foundation',
                'pageSize' => '24']
        ])
        ->get('https://api.nal.usda.gov/fdc/v1/foods/list')
        ->json();

        // [
        //     'name' => 'Apple',
        //     'type' => 'Fruit'
        // ];

        dump($foods);

        return view('food.index', compact('foods'))
                    // ->with('name', 'Apple')
                    // ->with('type', 'Fruit')
                    ;
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
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('food.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}
