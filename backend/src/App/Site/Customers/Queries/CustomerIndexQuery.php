<?php

namespace App\Site\Customers\Queries;

use Domain\Customers\Models\Customer;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class CustomerIndexQuery extends QueryBuilder
{
    public function __construct(Request $request)
    {
        $query = Customer::query();

        parent::__construct($query, $request);

        $this->allowedSorts([
            AllowedSort::field('name'),
            AllowedSort::field('birth_date'),
        ]);
    }
}
