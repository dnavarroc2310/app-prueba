<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\tagResource;

class TagController extends Controller
{
    public function index()
    {
        $tags= Tag::with('recipes.category', 'recipes.tags', 'recipes.user')->get();
        return tagResource::collection($tags);
    }

    public function show(Tag $tag)
    {
        $tag= $tag->load('recipes.category', 'recipes.tags', 'recipes.user');
        return new tagResource($tag);
    }
}
