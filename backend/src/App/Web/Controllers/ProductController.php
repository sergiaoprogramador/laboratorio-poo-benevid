<?php

namespace App\Web\Controllers;

use App\Http\Controller;
use App\Web\Queries\ProductIndexQuery;
use App\Traits\ResponseAPI;
use App\Web\Resources\ProductResource;

class ProductController extends Controller
{
    use ResponseAPI;

    public function index(ProductIndexQuery $query)
    {
        $products = $query->paginate(6);

        if (!$products) $this->error("Not exists Products for this Query: ", 404);

        return ProductResource::collection($products);
    }
}
