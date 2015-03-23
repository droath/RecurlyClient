<?php

namespace RecurlyClient\Entity;

class PlanAddon extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * Add-on code.
     *
     * @var string
     */
    protected $add_on_code;

    /**
     * Add-on name.
     *
     * @var string
     */
    protected $name;

    /**
     * Add-on amounts.
     *
     * @var array
     */
    protected $unit_amount_in_cents;

    /**
     * Add-on quantity.
     *
     * @var integer
     */
    protected $default_quantity;

    /**
     * Display a quantity field on hosted page.
     *
     * @var boolean
     */
    protected $display_quantity_on_hosted_page;

    /**
     * Account code.
     *
     * @var string
     */
    protected $accounting_code;

    /**
     * Add-on tax code.
     *
     * @var string
     */
    protected $tax_code;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'add_on';
    }

    /**
     * Gets the Add-on code.
     *
     * @return string
     */
    public function getAddOnCode()
    {
        return $this->add_on_code;
    }

    /**
     * Sets the Add-on code.
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
     * Gets the Add-on name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the Add-on name.
     *
     * @param string $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the Add-on amounts.
     *
     * @return array
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }

    /**
     * Sets the Add-on amounts.
     *
     * @param array $unit_amount_in_cents the unit amount in cents
     *
     * @return self
     */
    public function setUnitAmountInCents(array $unit_amount_in_cents)
    {
        $this->unit_amount_in_cents = $unit_amount_in_cents;

        return $this;
    }

    /**
     * Gets the Add-on quantity.
     *
     * @return integer
     */
    public function getDefaultQuantity()
    {
        return $this->default_quantity;
    }

    /**
     * Sets the Add-on quantity.
     *
     * @param integer $default_quantity the default quantity
     *
     * @return self
     */
    public function setDefaultQuantity($default_quantity)
    {
        $this->default_quantity = $default_quantity;

        return $this;
    }

    /**
     * Gets the Display a quantity field on hosted page.
     *
     * @return boolean
     */
    public function getDisplayQuantityOnHostedPage()
    {
        return $this->display_quantity_on_hosted_page;
    }

    /**
     * Sets the Display a quantity field on hosted page.
     *
     * @param boolean $display_quantity_on_hosted_page the display quantity on hosted page
     *
     * @return self
     */
    public function setDisplayQuantityOnHostedPage($display_quantity_on_hosted_page)
    {
        $this->display_quantity_on_hosted_page = $display_quantity_on_hosted_page;

        return $this;
    }

    /**
     * Gets the Account code.
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->accounting_code;
    }

    /**
     * Sets the Account code.
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
     * Gets the Add-on tax code.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->tax_code;
    }

    /**
     * Sets the Add-on tax code.
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
}
