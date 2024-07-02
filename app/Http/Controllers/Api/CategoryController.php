<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Resources\categoryCollection;
use App\Http\Resources\CategoryResource;
class CategoryController extends Controller
{
    public function index()
    {
        return new categoryCollection(Category::all());
    }

    public function show(Category $category)
    {
        //Se utiliza load() para traer las recetas de la categoría
        $category = $category->load('recipes.category', 'recipes.tags', 'recipes.user');
        return new CategoryResource($category);
    }
}
