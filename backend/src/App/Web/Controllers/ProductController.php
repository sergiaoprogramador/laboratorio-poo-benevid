<?php

namespace App\Web\Controllers;

use App\Http\Controller;
use App\Web\Queries\ProductIndexQuery;
use App\Web\Resources\ProductResource;
use App\Traits\ResponseAPI;

class ProductController extends Controller
{
    use ResponseAPI;

    public function index(ProductIndexQuery $query)
    {
        $products = $query->paginate();

        if (!$products) $this->error("Not exists Products for this Query: ", 404);

        return $this->success("Query request Products: ", ProductResource::collection($products), 200);
    }
}
