<?php

namespace Bitcoin\Lightning\Lnbits\Concerns;

use Bitcoin\Lightning\Lnbits\Cashier;

trait ManagesAmounts
{
    /**
     * Format the given amount into a displayable currency.
     *
     * @param  int  $amount
     * @return string
     */
    protected function formatAmount($amount)
    {
        return Cashier::formatAmount($amount, $this->currency());
    }

    /**
     * Format the Lnbits decimal into a displayable currency.
     *
     * @param  float  $amount
     * @return string
     */
    protected function formatDecimalAmount($amount)
    {
        if (! Cashier::currencyUsesCents($this->currency())) {
            return $this->formatAmount((int) $amount);
        }

        return $this->formatAmount((int) ($amount * 100));
    }
}
