<?php

namespace RecurlyClient\Entity;

class Subscription extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * Plan code for the subscription.
     *
     * @var string
     */
    protected $plan_code;

    /**
     * Subscription account.
     *
     * @var \RecurlyClient\Entity\Account
     */
    protected $account;

    /**
     * Subscription add-ons.
     *
     * @var \RecurlyClient\Entity\SubscriptionAddon
     */
    protected $subscription_add_ons;

    /**
     * Coupon code to apply to the new subscription.
     *
     * @var string
     */
    protected $coupon_code;

    /**
     * Unit amount of the subscription plan.
     *
     * @var integer
     */
    protected $unit_amount_in_cents;

    /**
     * Currency for the subscription.
     *
     * @var string
     */
    protected $currency;

    /**
     * Override the default quantity.
     *
     * @var integer
     */
    protected $quantity;

    /**
     * Overrides the default trial behavior for the subscription.
     *
     * @var string
     */
    protected $trial_ends_at;

    /**
     * The subscription will begin in the future on this date.
     *
     * @var string
     */
    protected $starts_at;

    /**
     * Renews the subscription for a specified number of cycles.
     *
     * @var string
     */
    protected $total_billing_cycles;

    /**
     * Indicates a date at which the first renewal should occur.
     *
     * @var string
     */
    protected $first_renewal_date;

    /**
     * Set the collection for an invoice as "automatic" or "manual".
     *
     * @var string
     */
    protected $collection_method;

    /**
     * Bypass the 60 second limit on creating subscriptions.
     *
     * @var boolean
     */
    protected $bulk;

    /**
     * Specify custom notes with this tag to add or override Terms and
     * Conditions.
     *
     * @var string
     */
    protected $terms_and_conditions;

    /**
     * Specify custom notes with this tag to add or override Customer Notes.
     *
     * @var string
     */
    protected $customer_notes;

    /**
     * VAT Reverse Charge Notes only appear if you have EU VAT enabled.
     *
     * @var string
     */
    protected $vat_reverse_charge_notes;

    /**
     * Subscription timeframe "now" for immediate, "renewal" to perform when
     * the subscription renews.
     *
     * @var string
     */
    protected $timeframe;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'subscription';
    }

    /**
     * Gets the Plan code for the subscription.
     *
     * @return string
     */
    public function getPlanCode()
    {
        return $this->plan_code;
    }

    /**
     * Sets the Plan code for the subscription.
     *
     * @param string $plan_code the plan code
     *
     * @return self
     */
    public function setPlanCode($plan_code)
    {
        $this->plan_code = $plan_code;

        return $this;
    }

    /**
     * Gets the Subscription account.
     *
     * @return \RecurlyClient\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets the Subscription account.
     *
     * @param \RecurlyClient\Entity\Account $account the account
     *
     * @return self
     */
    public function setAccount(\RecurlyClient\Entity\Account $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Gets the Subscription add-ons.
     *
     * @return \RecurlyClient\Entity\SubscriptionAddon
     */
    public function getSubscriptionAddOns()
    {
        return $this->subscription_add_ons;
    }

    /**
     * Sets the Subscription add-ons.
     *
     * @param \RecurlyClient\Entity\SubscriptionAddon $subscription_add_ons the subscription add ons
     *
     * @return self
     */
    public function setSubscriptionAddOns(\RecurlyClient\Entity\SubscriptionAddon $subscription_add_ons)
    {
        $this->subscription_add_ons = $subscription_add_ons;

        return $this;
    }

    /**
     * Gets the Coupon code to apply to the new subscription.
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->coupon_code;
    }

    /**
     * Sets the Coupon code to apply to the new subscription.
     *
     * @param string $coupon_code the coupon code
     *
     * @return self
     */
    public function setCouponCode($coupon_code)
    {
        $this->coupon_code = $coupon_code;

        return $this;
    }

    /**
     * Gets the Unit amount of the subscription plan.
     *
     * @return integer
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }

    /**
     * Sets the Unit amount of the subscription plan.
     *
     * @param integer $unit_amount_in_cents the unit amount in cents
     *
     * @return self
     */
    public function setUnitAmountInCents($unit_amount_in_cents)
    {
        $this->unit_amount_in_cents = $unit_amount_in_cents;

        return $this;
    }

    /**
     * Gets the Currency for the subscription.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets the Currency for the subscription.
     *
     * @param string $currency the currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets the Override the default quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the Override the default quantity.
     *
     * @param integer $quantity the quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets the Overrides the default trial behavior for the subscription.
     *
     * @return string
     */
    public function getTrialEndsAt()
    {
        return $this->trial_ends_at;
    }

    /**
     * Sets the Overrides the default trial behavior for the subscription.
     *
     * @param string $trial_ends_at the trial ends at
     *
     * @return self
     */
    public function setTrialEndsAt($trial_ends_at)
    {
        $this->trial_ends_at = $trial_ends_at;

        return $this;
    }

    /**
     * Gets the The subscription will begin in the future on this date.
     *
     * @return string
     */
    public function getStartsAt()
    {
        return $this->starts_at;
    }

    /**
     * Sets the The subscription will begin in the future on this date.
     *
     * @param string $starts_at the starts at
     *
     * @return self
     */
    public function setStartsAt($starts_at)
    {
        $this->starts_at = $starts_at;

        return $this;
    }

    /**
     * Gets the Renews the subscription for a specified number of cycles.
     *
     * @return string
     */
    public function getTotalBillingCycles()
    {
        return $this->total_billing_cycles;
    }

    /**
     * Sets the Renews the subscription for a specified number of cycles.
     *
     * @param string $total_billing_cycles the total billing cycles
     *
     * @return self
     */
    public function setTotalBillingCycles($total_billing_cycles)
    {
        $this->total_billing_cycles = $total_billing_cycles;

        return $this;
    }

    /**
     * Gets the Indicates a date at which the first renewal should occur.
     *
     * @return string
     */
    public function getFirstRenewalDate()
    {
        return $this->first_renewal_date;
    }

    /**
     * Sets the Indicates a date at which the first renewal should occur.
     *
     * @param string $first_renewal_date the first renewal date
     *
     * @return self
     */
    public function setFirstRenewalDate($first_renewal_date)
    {
        $this->first_renewal_date = $first_renewal_date;

        return $this;
    }

    /**
     * Gets the Set the collection for an invoice as "automatic" or "manual".
     *
     * @return string
     */
    public function getCollectionMethod()
    {
        return $this->collection_method;
    }

    /**
     * Sets the Set the collection for an invoice as "automatic" or "manual".
     *
     * @param string $collection_method the collection method
     *
     * @return self
     */
    public function setCollectionMethod($collection_method)
    {
        $this->collection_method = $collection_method;

        return $this;
    }

    /**
     * Gets the Bypass the 60 second limit on creating subscriptions.
     *
     * @return boolean
     */
    public function getBulk()
    {
        return $this->bulk;
    }

    /**
     * Sets the Bypass the 60 second limit on creating subscriptions.
     *
     * @param boolean $bulk the bulk
     *
     * @return self
     */
    public function setBulk($bulk)
    {
        $this->bulk = $bulk;

        return $this;
    }

    /**
     * Gets the Specify custom notes with this tag to add or override Terms and
     * Conditions.
     *
     * @return string
     */
    public function getTermsAndConditions()
    {
        return $this->terms_and_conditions;
    }

    /**
     * Sets the Specify custom notes with this tag to add or override Terms and
     * Conditions.
     *
     * @param string $terms_and_conditions the terms and conditions
     *
     * @return self
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        $this->terms_and_conditions = $terms_and_conditions;

        return $this;
    }

    /**
     * Gets the Specify custom notes with this tag to add or override Customer Notes.
     *
     * @return string
     */
    public function getCustomerNotes()
    {
        return $this->customer_notes;
    }

    /**
     * Sets the Specify custom notes with this tag to add or override Customer Notes.
     *
     * @param string $customer_notes the customer notes
     *
     * @return self
     */
    public function setCustomerNotes($customer_notes)
    {
        $this->customer_notes = $customer_notes;

        return $this;
    }

    /**
     * Gets the VAT Reverse Charge Notes only appear if you have EU VAT enabled.
     *
     * @return string
     */
    public function getVatReverseChargeNotes()
    {
        return $this->vat_reverse_charge_notes;
    }

    /**
     * Sets the VAT Reverse Charge Notes only appear if you have EU VAT enabled.
     *
     * @param string $vat_reverse_charge_notes the vat reverse charge notes
     *
     * @return self
     */
    public function setVatReverseChargeNotes($vat_reverse_charge_notes)
    {
        $this->vat_reverse_charge_notes = $vat_reverse_charge_notes;

        return $this;
    }

    /**
     * Gets the Subscription timeframe "now" for immediate, "renewal" to perform
     * when the subscription renews.
     *
     * @return string
     */
    public function getTimeframe()
    {
        return $this->timeframe;
    }

    /**
     * Sets the Subscription timeframe "now" for immediate, "renewal" to perform
     * when the subscription renews.
     *
     * @param string $timeframe the timeframe
     *
     * @return self
     */
    public function setTimeframe($timeframe)
    {
        $this->timeframe = $timeframe;

        return $this;
    }
}
