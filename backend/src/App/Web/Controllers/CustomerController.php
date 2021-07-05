<?php

namespace App\Web\Controllers;

use App\Http\Controller;
use App\Web\Queries\CustomerIndexQuery;
use App\Web\Resources\CustomerResource;
use App\Traits\ResponseAPI;

class CustomerController extends Controller
{
    use ResponseAPI;

    public function index(CustomerIndexQuery $query)
    {
        $customers = $query->paginate();

        if (!$customers) $this->error("Not exists Customers for this Query: ", 404);

        return $this->success("Query request Customers: ", CustomerResource::collection($customers), 200);
    }
}
