<?php

namespace RecurlyClient\Entity;

class Coupon extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * Unique code to identify and redeem the coupon.
     *
     * @var string
     */
    protected $coupon_code;

    /**
     * Coupon name.
     *
     * @var string
     */
    protected $name;

    /**
     * Description of the coupon on the hosted payment pages.
     *
     * @var string
     */
    protected $hosted_description;

    /**
     * Description of the coupon on the invoice.
     *
     * @var string
     */
    protected $invoice_description;

    /**
     * Last date to redeem the coupon.
     *
     * @var string
     */
    protected $redeem_by_date;

    /**
     * If true, the coupon applies to the first invoice only.
     *
     * @var boolean
     */
    protected $single_use;

    /**
     * Number of months after redemption that the coupon is valid.
     *
     * @var string
     */
    protected $applies_for_months;

    /**
     * Maximum number of accounts that may use the coupon before it can no
     * longer be redeemed.
     *
     * @var integer
     */
    protected $max_redemptions;

    /**
     * The coupon is valid for all plans.
     *
     * @var boolean
     */
    protected $applies_to_all_plans;

    /**
     * Discount type "percent" or "dollars".
     *
     * @var string
     */
    protected $discount_type;

    /**
     * Discount percentage.
     *
     * @var integer
     */
    protected $discount_percent;

    /**
     * Mapping of discount amounts by currency.
     *
     * @var integer
     */
    protected $discount_in_cents;

    /**
     * Plan codes the coupon applies to.
     *
     * @var array
     */
    protected $plan_codes;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'coupon';
    }

    /**
     * Gets the Unique code to identify and redeem the coupon.
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->coupon_code;
    }

    /**
     * Sets the Unique code to identify and redeem the coupon.
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
     * Gets the Coupon name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the Coupon name.
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
     * Gets the Description of the coupon on the hosted payment pages.
     *
     * @return string
     */
    public function getHostedDescription()
    {
        return $this->hosted_description;
    }

    /**
     * Sets the Description of the coupon on the hosted payment pages.
     *
     * @param string $hosted_description the hosted description
     *
     * @return self
     */
    public function setHostedDescription($hosted_description)
    {
        $this->hosted_description = $hosted_description;

        return $this;
    }

    /**
     * Gets the Description of the coupon on the invoice.
     *
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->invoice_description;
    }

    /**
     * Sets the Description of the coupon on the invoice.
     *
     * @param string $invoice_description the invoice description
     *
     * @return self
     */
    public function setInvoiceDescription($invoice_description)
    {
        $this->invoice_description = $invoice_description;

        return $this;
    }

    /**
     * Gets the Last date to redeem the coupon.
     *
     * @return string
     */
    public function getRedeemByDate()
    {
        return $this->redeem_by_date;
    }

    /**
     * Sets the Last date to redeem the coupon.
     *
     * @param string $redeem_by_date the redeem by date
     *
     * @return self
     */
    public function setRedeemByDate($redeem_by_date)
    {
        $this->redeem_by_date = $redeem_by_date;

        return $this;
    }

    /**
     * Gets the If true, the coupon applies to the first invoice only.
     *
     * @return boolean
     */
    public function getSingleUse()
    {
        return $this->single_use;
    }

    /**
     * Sets the If true, the coupon applies to the first invoice only.
     *
     * @param boolean $single_use the single use
     *
     * @return self
     */
    public function setSingleUse($single_use)
    {
        $this->single_use = $single_use;

        return $this;
    }

    /**
     * Gets the Number of months after redemption that the coupon is valid.
     *
     * @return string
     */
    public function getAppliesForMonths()
    {
        return $this->applies_for_months;
    }

    /**
     * Sets the Number of months after redemption that the coupon is valid.
     *
     * @param string $applies_for_months the applies for months
     *
     * @return self
     */
    public function setAppliesForMonths($applies_for_months)
    {
        $this->applies_for_months = $applies_for_months;

        return $this;
    }

    /**
     * Gets the Maximum number of accounts that may use the coupon before it
     * can no longer be redeemed.
     *
     * @return integer
     */
    public function getMaxRedemptions()
    {
        return $this->max_redemptions;
    }

    /**
     * Sets the Maximum number of accounts that may use the coupon before it
     * can no longer be redeemed.
     *
     * @param integer $max_redemptions the max redemptions
     *
     * @return self
     */
    public function setMaxRedemptions($max_redemptions)
    {
        $this->max_redemptions = $max_redemptions;

        return $this;
    }

    /**
     * Gets the The coupon is valid for all plans.
     *
     * @return boolean
     */
    public function getAppliesToAllPlans()
    {
        return $this->applies_to_all_plans;
    }

    /**
     * Sets the The coupon is valid for all plans.
     *
     * @param boolean $applies_to_all_plans the applies to all plans
     *
     * @return self
     */
    public function setAppliesToAllPlans($applies_to_all_plans)
    {
        $this->applies_to_all_plans = $applies_to_all_plans;

        return $this;
    }

    /**
     * Gets the Discount type "percent" or "dollars".
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discount_type;
    }

    /**
     * Sets the Discount type "percent" or "dollars".
     *
     * @param string $discount_type the discount type
     *
     * @return self
     */
    public function setDiscountType($discount_type)
    {
        $this->discount_type = $discount_type;

        return $this;
    }

    /**
     * Gets the Discount percentage.
     *
     * @return integer
     */
    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    /**
     * Sets the Discount percentage.
     *
     * @param integer $discount_percent the discount percent
     *
     * @return self
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->discount_percent = $discount_percent;

        return $this;
    }

    /**
     * Gets the Mapping of discount amounts by currency.
     *
     * @return integer
     */
    public function getDiscountInCents()
    {
        return $this->discount_in_cents;
    }

    /**
     * Sets the Mapping of discount amounts by currency.
     *
     * @param integer $discount_in_cents the discount in cents
     *
     * @return self
     */
    public function setDiscountInCents($discount_in_cents)
    {
        $this->discount_in_cents = $discount_in_cents;

        return $this;
    }

    /**
     * Gets the Plan codes the coupon applies to.
     *
     * @return array
     */
    public function getPlanCodes()
    {
        return $this->plan_codes;
    }

    /**
     * Sets the Plan codes the coupon applies to.
     *
     * @param array $plan_codes the plan codes
     *
     * @return self
     */
    public function setPlanCodes(array $plan_codes)
    {
        $this->plan_codes = $plan_codes;

        return $this;
    }
}
