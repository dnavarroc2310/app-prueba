<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show(Category $category)
    {
        //Se utiliza load() para traer las recetas de la categoría
        return $category->load('Recipes');
    }
}
