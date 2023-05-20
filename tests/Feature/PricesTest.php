<?php

namespace Tests\Feature;

use Bitcoin\Lightning\Lnbits\Cashier;
use Bitcoin\Lightning\Lnbits\ProductPrice;

class PricesTest extends FeatureTestCase
{
    public function test_it_can_fetch_the_prices_of_products()
    {
        if (! getenv('PADDLE_TEST_PRODUCT')) {
            $this->markTestSkipped('Test product not configured.');
        }

        $prices = Cashier::productPrices([getenv('PADDLE_TEST_PRODUCT')]);

        $this->assertNotEmpty($prices);
        $this->assertContainsOnlyInstancesOf(ProductPrice::class, $prices->all());
    }
}
