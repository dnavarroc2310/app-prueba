<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Support\Facades\Route;

// Ruta de categorías
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);

// Ruta de recetas
Route::get('recipes', [RecipeController::class, 'index']);
Route::post('recipes', [RecipeController::class, 'store']);
Route::get('recipes/{recipe}', [RecipeController::class, 'show']);
Route::put('recipes/{recipe}', [RecipeController::class, 'update']);
Route::delete('recipes/{recipe}', [RecipeController::class, 'destroy']);



// Ruta de tags
Route::get('tags', [TagController::class, 'index']);
Route::get('tags/{tag}', [TagController::class, 'show']);
