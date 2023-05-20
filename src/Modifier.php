<?php

namespace Bitcoin\Lightning\Lnbits;

use Bitcoin\Lightning\Lnbits\Concerns\ManagesAmounts;
use Money\Currency;

class Modifier
{
    use ManagesAmounts;

    /**
     * The Subscription model the modifier belongs to.
     *
     * @var \Bitcoin\Lightning\Lnbits\Subscription
     */
    protected $subscription;

    /**
     * The raw modifier array as returned by Lnbits.
     *
     * @var array
     */
    protected $modifier;

    /**
     * Create a new modifier instance.
     *
     * @param  \Bitcoin\Lightning\Lnbits\Subscription  $subscription
     * @param  array  $modifier
     * @return void
     */
    public function __construct(Subscription $subscription, array $modifier)
    {
        $this->subscription = $subscription;
        $this->modifier = $modifier;
    }

    /**
     * Get the modifier's Lnbits ID.
     *
     * @return int
     */
    public function id()
    {
        return $this->modifier['modifier_id'];
    }

    /**
     * Get the related subscription.
     *
     * @return \Bitcoin\Lightning\Lnbits\Subscription
     */
    public function subscription()
    {
        return $this->subscription;
    }

    /**
     * Get the total amount.
     *
     * @return string
     */
    public function amount()
    {
        return $this->formatDecimalAmount($this->rawAmount());
    }

    /**
     * Get the raw total amount.
     *
     * @return float
     */
    public function rawAmount()
    {
        return $this->modifier['amount'];
    }

    /**
     * Get the currency.
     *
     * @return \Money\Currency
     */
    public function currency(): Currency
    {
        return new Currency($this->modifier['currency']);
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function description()
    {
        return $this->modifier['description'];
    }

    /**
     * Indicates whether the modifier is recurring.
     *
     * @return bool
     */
    public function recurring()
    {
        return (bool) $this->modifier['is_recurring'];
    }

    /**
     * Deletes itself on Lnbits.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function delete()
    {
        $payload = $this->subscription->billable->paddleOptions([
            'modifier_id' => $this->id(),
        ]);

        return Cashier::post('/subscription/modifiers/delete', $payload);
    }
}
