<?php

namespace Cashier\BtcPayServer;

use Cashier\BtcPayServer\Concerns\ManagesCustomer;
use Cashier\BtcPayServer\Concerns\ManagesReceipts;
use Cashier\BtcPayServer\Concerns\ManagesSubscriptions;
use Cashier\BtcPayServer\Concerns\PerformsCharges;

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
    public function btcpayOptions(array $options = [])
    {
        return Cashier::btcpayOptions($options);
    }
}
