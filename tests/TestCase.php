<?php

namespace Tests;

use Cashier\BtcPayServer\CashierServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [CashierServiceProvider::class];
    }
}
