<?php

namespace App\Web\Controllers;

use App\Http\Controller;
use Domain\Reviews\Models\Review;
use App\Web\Resources\ReviewResource;
use App\Traits\ResponseAPI;

class ReviewController extends Controller
{
    use ResponseAPI;

    public function index()
    {
        $reviews = Review::all();

        if (!$reviews) $this->error("Not exists Reviews for this Query: ", 404);

        return $this->success("Query request Reviews: ", ReviewResource::collection($reviews), 200);
    }
}
