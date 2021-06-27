<?php

namespace Domain\Customers\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
}
