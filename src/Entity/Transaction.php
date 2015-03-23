<?php

namespace RecurlyClient\Entity;

class Transaction extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * Recurly account.
     *
     * @var \RecurlyClient\Entity\Account
     */
    protected $account;

    /**
     * Transaction amount.
     *
     * @var integer
     */
    protected $amount_in_cents;

    /**
     * Transaction currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * Transaction description.
     *
     * @var string
     */
    protected $description;

    /**
     * Gets the Recurly account.
     *
     * @return \RecurlyClient\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets the Recurly account.
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
     * Gets the Transaction amount.
     *
     * @return integer
     */
    public function getAmountInCents()
    {
        return $this->amount_in_cents;
    }

    /**
     * Sets the Transaction amount.
     *
     * @param integer $amount_in_cents the amount in cents
     *
     * @return self
     */
    public function setAmountInCents($amount_in_cents)
    {
        $this->amount_in_cents = $amount_in_cents;

        return $this;
    }

    /**
     * Gets the Transaction currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets the Transaction currency code.
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
     * Gets the Transaction description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the Transaction description.
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
}
