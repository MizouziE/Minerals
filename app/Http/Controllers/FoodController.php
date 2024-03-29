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
        $search = $request->input('search');

        $foods = Http::withOptions([
            'query' => [
                'api_key' => env('API_KEY', 'DEMO_KEY'),
                'query' => $search ?? '',
                'dataType' => 'Foundation',
                'pageSize' => 15
                ]
        ])
        ->get('https://api.nal.usda.gov/fdc/v1/foods/list')
        ->json();

        foreach ($foods as &$food) {

            $food['image'] = Http::withHeaders([
                'Authorization' => env('IMAGE_API_KEY')
            ])
            ->withOptions([
                'query' => [
                    'query' => strtok($food['description'], ','),
                    'per_page' => 1
                    ]
            ])
            ->get('https://api.pexels.com/v1/search')
            ->json()['photos'][0]['src']['small']
            ?? null;
            }

        return view('food.index', compact('foods'));
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
    public function show(Food $food, Request $request)
    {
        $search = $request->input('search');

        $food = Http::withOptions([
            'query' => [
                'api_key' => env('API_KEY', 'DEMO_KEY'),
                'query' => $search ?? 'apple',
                'dataType' => 'Foundation',
                'pageSize' => '1'
                ]
        ])
        ->get('https://api.nal.usda.gov/fdc/v1/foods/list')
        ->json();

        $food[0]['foodNutrients'] = array_filter($food[0]['foodNutrients'], function ($fN) { //removes ZERO values
            if ($fN['amount']) {
                return $fN;
            }
        }) ?? [];

        $food['image'] = Http::withHeaders([
            'Authorization' => env('IMAGE_API_KEY')
        ])
        ->withOptions([
            'query' => [
                'query' => $food[0]['description'],
                'per_page' => 1
                ]
        ])
        ->get('https://api.pexels.com/v1/search')
        ->json()['photos'][0]['src']['medium'];

        return view('food.show', compact(
            'food',
        ));
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
