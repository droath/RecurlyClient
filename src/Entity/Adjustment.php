<?php

namespace RecurlyClient\Entity;

class Adjustment extends EntityAbstract
{
    /**
     * Adjustment account code.
     *
     * @var string
     */
    protected $account_code;

    /**
     * Adjustment Currency.
     *
     * @var string
     */
    protected $currency;

    /**
     * Adjustment unit amount in cents.
     *
     * @var integer
     */
    protected $unit_amount_in_cents;

    /**
     * Adjustment description.
     *
     * @var string
     */
    protected $description;

    /**
     * Adjustment quantity.
     *
     * @var integer
     */
    protected $quantity;

    /**
     * Adjustment account code.
     *
     * @var string
     */
    protected $accounting_code;

    /**
     * Adjustment tax exempt.
     *
     * @var boolean
     */
    protected $tax_exempt;

    /**
     * Adjustment tax code.
     *
     * @var string
     */
    protected $tax_code;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'adjustment';
    }

    /**
     * Gets the Adjustment tax code.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->tax_code;
    }

    /**
     * Sets the Adjustment tax code.
     *
     * @param string $tax_code the tax code
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        $this->tax_code = $tax_code;

        return $this;
    }

    /**
     * Gets the Adjustment account code.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->account_code;
    }

    /**
     * Sets the Adjustment account code.
     *
     * @param string $account_code the account code
     *
     * @return self
     */
    public function setAccountCode($account_code)
    {
        $this->account_code = $account_code;

        return $this;
    }

    /**
     * Gets the Adjustment Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets the Adjustment Currency.
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
     * Gets the Adjustment unit amount in cents.
     *
     * @return integer
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }

    /**
     * Sets the Adjustment unit amount in cents.
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
     * Gets the Adjustment description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the Adjustment description.
     *
     * @param string $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the Adjustment quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the Adjustment quantity.
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
     * Gets the Adjustment account code.
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->accounting_code;
    }

    /**
     * Sets the Adjustment account code.
     *
     * @param string $accounting_code the accounting code
     *
     * @return self
     */
    public function setAccountingCode($accounting_code)
    {
        $this->accounting_code = $accounting_code;

        return $this;
    }

    /**
     * Gets the Adjustment tax exempt.
     *
     * @return boolean
     */
    public function getTaxExempt()
    {
        return $this->tax_exempt;
    }

    /**
     * Sets the Adjustment tax exempt.
     *
     * @param boolean $tax_exempt the tax exempt
     *
     * @return self
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->tax_exempt = $tax_exempt;

        return $this;
    }
}
