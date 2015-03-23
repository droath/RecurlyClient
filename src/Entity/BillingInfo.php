<?php

namespace RecurlyClient\Entity;

class BillingInfo extends \RecurlyClient\Entity\EntityAbstract
{
    /**
     * First name.
     *
     * @var string
     */
    protected $first_name;

    /**
     * Last name.
     *
     * @var string
     */
    protected $last_name;

    /**
     * Address line 1.
     *
     * @var string
     */
    protected $address1;

    /**
     * Address line 2.
     *
     * @var string
     */
    protected $address2;

    /**
     * City.
     *
     * @var string
     */
    protected $city;

    /**
     * State.
     *
     * @var string
     */
    protected $state;

    /**
     * Country.
     *
     * @var string
     */
    protected $country;

    /**
     * Zip or postal code.
     *
     * @var integer
     */
    protected $zip;

    /**
     * Phone number.
     *
     * @var string
     */
    protected $phone;

    /**
     * Customer's VAT Number
     *
     * @var string
     */
    protected $vat_number;

    /**
     * Customer's IP address.
     *
     * @var string
     */
    protected $ip_address;

    /**
     * Credit card number.
     *
     * @var string
     */
    protected $number;

    /**
     * Expiration month.
     *
     * @var integer
     */
    protected $month;

    /**
     * Expiration year.
     *
     * @var integer
     */
    protected $year;

    /**
     * Security code or CVV.
     *
     * @var string
     */
    protected $verification_value;

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'billing_info';
    }

    /**
     * Gets the First name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Sets the First name.
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
     * Gets the Last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Sets the Last name.
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
     * Gets the Address line 1.
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Sets the Address line 1.
     *
     * @param string $address1 the address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Gets the Address line 2.
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Sets the Address line 2.
     *
     * @param string $address2 the address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Gets the City.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the City.
     *
     * @param string $city the city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets the State.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the State.
     *
     * @param string $state the state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets the Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the Country.
     *
     * @param string $country the country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets the Zip or postal code.
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the Zip or postal code.
     *
     * @param integer $zip the zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Gets the Phone number.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the Phone number.
     *
     * @param string $phone the phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets the Customer's VAT Number.
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vat_number;
    }

    /**
     * Sets the Customer's VAT Number.
     *
     * @param string $vat_number the vat number
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->vat_number = $vat_number;

        return $this;
    }

    /**
     * Gets the Customer's IP address.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Sets the Customer's IP address.
     *
     * @param string $ip_address the ip address
     *
     * @return self
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    /**
     * Gets the Credit card number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the Credit card number.
     *
     * @param string $number the number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets the Expiration month.
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets the Expiration month.
     *
     * @param integer $month the month
     *
     * @return self
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Gets the Expiration year.
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets the Expiration year.
     *
     * @param integer $year the year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Gets the Security code or CVV.
     *
     * @return string
     */
    public function getVerificationValue()
    {
        return $this->verification_value;
    }

    /**
     * Sets the Security code or CVV.
     *
     * @param string $verification_value the verification value
     *
     * @return self
     */
    public function setVerificationValue($verification_value)
    {
        $this->verification_value = $verification_value;

        return $this;
    }
}
