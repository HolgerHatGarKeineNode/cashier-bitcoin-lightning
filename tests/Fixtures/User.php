<?php

namespace Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Model;
use Bitcoin\Lightning\Lnbits\Billable;

class User extends Model
{
    use Billable;

    protected $guarded = [];
}
