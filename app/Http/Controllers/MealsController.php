<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    public function index(Meal $meal)
    {
        $meals = Meal::all();

        return view('meals/index', compact('meals'));
    }

    public function store(Meal $meal)
    {
        request()->validate(['food' => 'required', 'drink' => 'required']);

        Meal::create(request(['food', 'drink']));

        return redirect('/meals');
    }

    public function show(Meal $meal)
    {
        return view('meals.show', compact('meal'));
    }
}
