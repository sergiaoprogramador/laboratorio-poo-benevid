<?php

namespace App\Web\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public  function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'rating' => $this->rating,
            'comment' => $this->comment,
            'product_id' => $this->product_id
        ];
    }
}
