<?php

namespace Bitcoin\Lightning\Lnbits\Concerns;

use Bitcoin\Lightning\Lnbits\Cashier;

trait ManagesReceipts
{
    /**
     * Get all of the receipts for the Billable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function receipts()
    {
        return $this->morphMany(Cashier::$receiptModel, 'billable')->orderByDesc('created_at');
    }
}
