<?php

namespace Cashier\BtcPayServer\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Cashier\BtcPayServer\Subscription;

class SubscriptionCancelled
{
    use Dispatchable, SerializesModels;

    /**
     * The subscription instance.
     *
     * @var \Cashier\BtcPayServer\Subscription
     */
    public $subscription;

    /**
     * The webhook payload.
     *
     * @var array
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @param  \Cashier\BtcPayServer\Subscription  $subscription
     * @param  array  $payload
     * @return void
     */
    public function __construct(Subscription $subscription, array $payload)
    {
        $this->subscription = $subscription;
        $this->payload = $payload;
    }
}
