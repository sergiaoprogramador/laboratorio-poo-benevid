<?php

namespace App\Web\Controllers;

use App\Http\Controller;
use App\Traits\ResponseAPI;
use App\Web\Queries\ProductIndexQuery;

class ProductController extends Controller
{
    use ResponseAPI;

    public function index(ProductIndexQuery $query)
    {
        $products = $query->paginate();

        if (!$products) $this->error("Not exists Products for this Query: ", 404);

        return $this->success("Query request Products: ", CustomerResource::collection($products), 200);
    }
}
