<?php

namespace RecurlyClient\Entity;

class Account extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * Account code.
     *
     * @var string
     */
    protected $account_code;

    /**
     * Account username.
     *
     * @var string
     */
    protected $username;

    /**
     * Account email.
     *
     * @var string
     */
    protected $email;

    /**
     * Account first name.
     *
     * @var string
     */
    protected $first_name;

    /**
     * Account last name.
     *
     * @var string
     */
    protected $last_name;

    /**
     * Account company name.
     *
     * @var string
     */
    protected $company_name;

    /**
     * Account VAT number.
     *
     * @var integer
     */
    protected $vat_number;

    /**
     * Account tax exempt.
     *
     * @var boolean
     */
    protected $tax_exempt;

    /**
     * Account entity use code.
     *
     * @var string
     */
    protected $entity_use_code;

    /**
     * Account billing info.
     *
     * @var \RecurlyClient\Entity\BillingInfo
     */
    protected $billing_info;

    /**
     * Account address.
     *
     * @var string
     */
    protected $address;

    /**
     * Account accept language.
     *
     * @var string
     */
    protected $accept_language;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'account';
    }

    /**
     * Gets the Account code.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->account_code;
    }

    /**
     * Sets the Account code.
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
     * Gets the Account username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the Account username.
     *
     * @param string $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the Account email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the Account email.
     *
     * @param string $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the Account first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Sets the Account first name.
     *
     * @param string $first_name the first name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Gets the Account last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Sets the Account last name.
     *
     * @param string $last_name the last name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Gets the Account company name.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Sets the Account company name.
     *
     * @param string $company_name the company name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;

        return $this;
    }

    /**
     * Gets the Account VAT number.
     *
     * @return integer
     */
    public function getVatNumber()
    {
        return $this->vat_number;
    }

    /**
     * Sets the Account VAT number.
     *
     * @param integer $vat_number the vat number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->vat_number = $vat_number;

        return $this;
    }

    /**
     * Gets the Account tax exempt.
     *
     * @return boolean
     */
    public function getTaxExempt()
    {
        return $this->tax_exempt;
    }

    /**
     * Sets the Account tax exempt.
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
     * Gets the Account entity use code.
     *
     * @return string
     */
    public function getEntityUseCode()
    {
        return $this->entity_use_code;
    }

    /**
     * Sets the Account entity use code.
     *
     * @param string $entity_use_code the entity use code
     *
     * @return self
     */
    public function setEntityUseCode($entity_use_code)
    {
        $this->entity_use_code = $entity_use_code;

        return $this;
    }

    /**
     * Gets the Account billing info.
     *
     * @return \RecurlyClient\Entity\BillingInfo
     */
    public function getBillingInfo()
    {
        return $this->billing_info;
    }

    /**
     * Sets the Account billing info.
     *
     * @param \RecurlyClient\Entity\BillingInfo $billing_info the billing info
     *
     * @return self
     */
    public function setBillingInfo(\RecurlyClient\Entity\BillingInfo $billing_info)
    {
        $this->billing_info = $billing_info;

        return $this;
    }

    /**
     * Gets the Account address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the Account address.
     *
     * @param string $address the address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets the Account accept language.
     *
     * @return string
     */
    public function getAcceptLanguage()
    {
        return $this->accept_language;
    }

    /**
     * Sets the Account accept language.
     *
     * @param string $accept_language the accept language
     *
     * @return self
     */
    public function setAcceptLanguage($accept_language)
    {
        $this->accept_language = $accept_language;

        return $this;
    }
}
