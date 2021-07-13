<?php

namespace App\Web\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public  function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'brand' => $this->brand,
            'price' => $this->price,
            'countInStock' => $this->countInStock,
            'description' => $this->description,
        ];
    }
}
