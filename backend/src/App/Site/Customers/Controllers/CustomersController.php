<?php

namespace App\Site\Customers\Controllers;

use App\Http\Controller;
use App\Site\Customers\Queries\CustomerIndexQuery;
use App\Site\Customers\Resources\CustomerResource;
use App\Traits\ResponseAPI;

class CustomersController extends Controller
{
    use ResponseAPI;

    public function index(CustomerIndexQuery $query)
    {
        $customers = $query->paginate();

        if (!$customers) $this->error("Not exists Customers for this Query: ", 404);
        // dd($customers);

        return $this->success("Query request Customers: ", CustomerResource::collection($customers), 200);
    }
}
