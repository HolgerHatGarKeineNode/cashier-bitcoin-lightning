<?php

namespace Bitcoin\Lightning\Lnbits\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Bitcoin\Lightning\Lnbits\Subscription;

class SubscriptionUpdated
{
    use Dispatchable, SerializesModels;

    /**
     * The subscription instance.
     *
     * @var \Bitcoin\Lightning\Lnbits\Subscription
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
     * @param  \Bitcoin\Lightning\Lnbits\Subscription  $subscription
     * @param  array  $payload
     * @return void
     */
    public function __construct(Subscription $subscription, array $payload)
    {
        $this->subscription = $subscription;
        $this->payload = $payload;
    }
}
