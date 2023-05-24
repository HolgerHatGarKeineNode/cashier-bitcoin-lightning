<?php

namespace Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Model;
use Cashier\BtcPayServer\Billable;

class User extends Model
{
    use Billable;

    protected $guarded = [];
}
