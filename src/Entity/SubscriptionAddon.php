<?php

namespace RecurlyClient\Entity;

class SubscriptionAddon extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * The code for the Add-On.
     *
     * @var string
     */
    protected $add_on_code;

    /**
     * Amount of the transaction in cents.
     *
     * @var integer
     */
    protected $unit_amount_in_cents;

    /**
     * Override the default quantity.
     *
     * @var integer
     */
    protected $quantity;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'subscription_add_on';
    }

    /**
     * Gets the The code for the Add-On.
     *
     * @return string
     */
    public function getAddOnCode()
    {
        return $this->add_on_code;
    }

    /**
     * Sets the The code for the Add-On.
     *
     * @param string $add_on_code the add on code
     *
     * @return self
     */
    public function setAddOnCode($add_on_code)
    {
        $this->add_on_code = $add_on_code;

        return $this;
    }

    /**
     * Gets the Amount of the transaction in cents.
     *
     * @return integer
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }

    /**
     * Sets the Amount of the transaction in cents.
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
}
