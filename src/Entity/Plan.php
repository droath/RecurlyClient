<?php

namespace RecurlyClient\Entity;

class Plan extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * Unique code to identify the plan.
     *
     * @var string
     */
    protected $plan_code;

    /**
     * Plan name.
     *
     * @var string
     */
    protected $name;

    /**
     * Optional plan description.
     *
     * @var string
     */
    protected $description;

    /**
     * Accounting code for related invoice line items.
     *
     * @var string
     */
    protected $accounting_code;

    /**
     * Plan interval "days", or "months".
     *
     * @var string
     */
    protected $plan_interval_unit;

    /**
     * Plan interval length.
     *
     * @var integer
     */
    protected $plan_interval_length;

    /**
     * Plan trial interval "days", or "months".
     *
     * @var string
     */
    protected $trial_interval_unit;

    /**
     * Plan trial interval length.
     *
     * @var integer
     */
    protected $trial_interval_length;

    /**
     * Plan setup fee.
     *
     * @var array
     */
    protected $setup_fee_in_cents;

    /**
     * Plan unit amount.
     *
     * @var array
     */
    protected $unit_amount_in_cents;

    /**
     * Number of billing cycles before the plan stops renewing.
     *
     * @var integer
     */
    protected $total_billing_cycles;

    /**
     * Unit description for the quantity.
     *
     * @var string
     */
    protected $unit_name;

    /**
     * Display the quantity field on the hosted payment page.
     *
     * @var boolean
     */
    protected $display_quantity;

    /**
     * URL to redirect to after signup on the hosted payment pages.
     *
     * @var string
     */
    protected $success_url;

    /**
     * URL to redirect to on canceled signup on the hosted payment pages.
     *
     * @var string
     */
    protected $cancel_url;

    /**
     * Exempts tax on the plan.
     *
     * @var boolean
     */
    protected $tax_exempt;

    /**
     * EU VAT merchants and Avalara AvaTax Pro merchants.
     *
     * @var string
     */
    protected $tax_code;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'plan';
    }

    /**
     * Gets the Unique code to identify the plan.
     *
     * @return string
     */
    public function getPlanCode()
    {
        return $this->plan_code;
    }

    /**
     * Sets the Unique code to identify the plan.
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
     * Gets the Plan name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the Plan name.
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
     * Gets the Optional plan description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the Optional plan description.
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
     * Gets the Accounting code for related invoice line items.
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->accounting_code;
    }

    /**
     * Sets the Accounting code for related invoice line items.
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
     * Gets the Plan interval "days", or "months".
     *
     * @return string
     */
    public function getPlanIntervalUnit()
    {
        return $this->plan_interval_unit;
    }

    /**
     * Sets the Plan interval "days", or "months".
     *
     * @param string $plan_interval_unit the plan interval unit
     *
     * @return self
     */
    public function setPlanIntervalUnit($plan_interval_unit)
    {
        $this->plan_interval_unit = $plan_interval_unit;

        return $this;
    }

    /**
     * Gets the Plan interval length.
     *
     * @return integer
     */
    public function getPlanIntervalLength()
    {
        return $this->plan_interval_length;
    }

    /**
     * Sets the Plan interval length.
     *
     * @param integer $plan_interval_length the plan interval length
     *
     * @return self
     */
    public function setPlanIntervalLength($plan_interval_length)
    {
        $this->plan_interval_length = $plan_interval_length;

        return $this;
    }

    /**
     * Gets the Plan trial interval "days", or "months".
     *
     * @return string
     */
    public function getTrialIntervalUnit()
    {
        return $this->trial_interval_unit;
    }

    /**
     * Sets the Plan trial interval "days", or "months".
     *
     * @param string $trial_interval_unit the trial interval unit
     *
     * @return self
     */
    public function setTrialIntervalUnit($trial_interval_unit)
    {
        $this->trial_interval_unit = $trial_interval_unit;

        return $this;
    }

    /**
     * Gets the Plan trial interval length.
     *
     * @return integer
     */
    public function getTrialIntervalLength()
    {
        return $this->trial_interval_length;
    }

    /**
     * Sets the Plan trial interval length.
     *
     * @param integer $trial_interval_length the trial interval length
     *
     * @return self
     */
    public function setTrialIntervalLength($trial_interval_length)
    {
        $this->trial_interval_length = $trial_interval_length;

        return $this;
    }

    /**
     * Gets the Plan setup fee.
     *
     * @return array
     */
    public function getSetupFeeInCents()
    {
        return $this->setup_fee_in_cents;
    }

    /**
     * Sets the Plan setup fee.
     *
     * @param array $setup_fee_in_cents the setup fee in cents
     *
     * @return self
     */
    public function setSetupFeeInCents(array $setup_fee_in_cents)
    {
        $this->setup_fee_in_cents = $setup_fee_in_cents;

        return $this;
    }

    /**
     * Gets the Plan unit amount.
     *
     * @return array
     */
    public function getUnitAmountInCents()
    {
        return $this->unit_amount_in_cents;
    }

    /**
     * Sets the Plan unit amount.
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
     * Gets the Number of billing cycles before the plan stops renewing.
     *
     * @return integer
     */
    public function getTotalBillingCycles()
    {
        return $this->total_billing_cycles;
    }

    /**
     * Sets the Number of billing cycles before the plan stops renewing.
     *
     * @param integer $total_billing_cycles the total billing cycles
     *
     * @return self
     */
    public function setTotalBillingCycles($total_billing_cycles)
    {
        $this->total_billing_cycles = $total_billing_cycles;

        return $this;
    }

    /**
     * Gets the Unit description for the quantity.
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->unit_name;
    }

    /**
     * Sets the Unit description for the quantity.
     *
     * @param string $unit_name the unit name
     *
     * @return self
     */
    public function setUnitName($unit_name)
    {
        $this->unit_name = $unit_name;

        return $this;
    }

    /**
     * Gets the Display the quantity field on the hosted payment page.
     *
     * @return boolean
     */
    public function getDisplayQuantity()
    {
        return $this->display_quantity;
    }

    /**
     * Sets the Display the quantity field on the hosted payment page.
     *
     * @param boolean $display_quantity the display quantity
     *
     * @return self
     */
    public function setDisplayQuantity($display_quantity)
    {
        $this->display_quantity = $display_quantity;

        return $this;
    }

    /**
     * Gets the URL to redirect to after signup on the hosted payment pages.
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * Sets the URL to redirect to after signup on the hosted payment pages.
     *
     * @param string $success_url the success url
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        $this->success_url = $success_url;

        return $this;
    }

    /**
     * Gets the URL to redirect to on canceled signup on the hosted payment pages.
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }

    /**
     * Sets the URL to redirect to on canceled signup on the hosted payment pages.
     *
     * @param string $cancel_url the cancel url
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        $this->cancel_url = $cancel_url;

        return $this;
    }

    /**
     * Gets the Exempts tax on the plan.
     *
     * @return boolean
     */
    public function getTaxExempt()
    {
        return $this->tax_exempt;
    }

    /**
     * Sets the Exempts tax on the plan.
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

    /**
     * Gets the EU VAT merchants and Avalara AvaTax Pro merchants.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->tax_code;
    }

    /**
     * Sets the EU VAT merchants and Avalara AvaTax Pro merchants.
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
