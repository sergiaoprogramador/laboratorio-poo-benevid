<?php

namespace App\Web\Controllers;

use App\Http\Controller;
use Domain\Products\Models\Category;
use App\Web\Resources\CategoryResource;
use App\Traits\ResponseAPI;

class CategoryController extends Controller
{
    use ResponseAPI;

    public function index()
    {
        $categories = Category::all();

        if (!$categories) $this->error("Not exists Categories for this Query: ", 404);

        return $this->success("Query request Categories: ", CategoryResource::collection($categories), 200);
    }
}
