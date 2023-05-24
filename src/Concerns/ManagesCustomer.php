<?php

namespace Cashier\BtcPayServer\Concerns;

use Cashier\BtcPayServer\Cashier;

trait ManagesCustomer
{
    /**
     * Create a customer record for the billable model.
     *
     * @param  array  $attributes
     * @return \Cashier\BtcPayServer\Customer
     */
    public function createAsCustomer(array $attributes = [])
    {
        return $this->customer()->create($attributes);
    }

    /**
     * Get the customer related to the billable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function customer()
    {
        return $this->morphOne(Cashier::$customerModel, 'billable');
    }

    /**
     * Get prices for a set of product ids for this billable model.
     *
     * @param  array|int  $products
     * @param  array  $options
     * @return \Illuminate\Support\Collection
     */
    public function productPrices($products, array $options = [])
    {
        $options = array_merge([
            'customer_country' => $this->btcpayCountry(),
        ], $options);

        return Cashier::productPrices($products, $options);
    }

    /**
     * Get the billable model's email address to associate with Lnbits.
     *
     * @return string|null
     */
    public function btcpayEmail()
    {
        return $this->email;
    }

    /**
     * Get the billable model's country to associate with Lnbits.
     *
     * This needs to be a 2 letter code. See the link below for supported countries.
     *
     * @return string|null
     *
     * @link https://developer.btcpay.com/reference/platform-parameters/supported-countries
     */
    public function btcpayCountry()
    {
        //
    }

    /**
     * Get the billable model's postcode to associate with Lnbits.
     *
     * See the link below for countries which require this.
     *
     * @return string|null
     *
     * @link https://developer.btcpay.com/reference/platform-parameters/supported-countries#countries-requiring-postcode
     */
    public function btcpayPostcode()
    {
        //
    }
}
