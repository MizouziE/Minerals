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
        // $request = 'apple';
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

        $fNs = $food[0]['foodNutrients'] ?? [];


        $image = Http::withHeaders([
            'Authorization' => env('IMAGE_API_KEY')
        ])
        ->withOptions([
            'query' => [
                'query' => $search ?? 'apple'
                ]
        ])
        ->get('https://api.pexels.com/v1/search')
        ->json();


        // dump($image);

        return view('food.show', compact(
            'food',
            'fNs',
            'image'
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
