<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        //para traer todo se utiliza all() para traer solo un registro se utiliza find()
        //para traer un registro con sus relaciones se utiliza with()
        //para traer todos los registros con sus relaciones se utiliza with()
        //para traer todos los registros se utiliza all()
        return Recipe::with('category','tags','user')->get();
    }

    public function show(Recipe $recipe)
    {
        return $recipe->load('category','tags','user');
    }

    public function store(Request $request)
    {
        $recipe = Recipe::create($request->all());
        return response()->json($recipe, 201);
    }


}
