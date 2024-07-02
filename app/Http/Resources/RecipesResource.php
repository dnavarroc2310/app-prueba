<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecipesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'type'=>'recipe',
            'attributes'=>[
                'category'=>$this->category->name,
                'author'=>$this->user->name,
                'tittle'=>$this->tittle,
                'description'=>$this->description,
                'image'=>$this->image,
                'ingredients'=>$this->ingredients,
                'instructions'=>$this->instructions,
                'tags'=>$this->tags->pluck('name')->implode(', '),
            ],
        ];
    }
}
