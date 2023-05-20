<?php

namespace Bitcoin\Lightning\Lnbits;

use Bitcoin\Lightning\Lnbits\Concerns\ManagesCustomer;
use Bitcoin\Lightning\Lnbits\Concerns\ManagesReceipts;
use Bitcoin\Lightning\Lnbits\Concerns\ManagesSubscriptions;
use Bitcoin\Lightning\Lnbits\Concerns\PerformsCharges;

trait Billable
{
    use ManagesCustomer;
    use ManagesSubscriptions;
    use ManagesReceipts;
    use PerformsCharges;

    /**
     * Get the default Lnbits API options for the current Billable model.
     *
     * @param  array  $options
     * @return array
     */
    public function paddleOptions(array $options = [])
    {
        return Cashier::paddleOptions($options);
    }
}
