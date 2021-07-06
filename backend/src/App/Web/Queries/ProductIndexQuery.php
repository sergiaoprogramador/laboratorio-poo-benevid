<?php

namespace App\Web\Queries;

use Domain\Products\Models\Product;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class ProductIndexQuery extends QueryBuilder
{
    public function __construct(Request $request)
    {
        $query = Product::query();

        parent::__construct($query, $request);

        $this->allowedSorts([
            AllowedSort::field('name'),
        ]);
    }
}
