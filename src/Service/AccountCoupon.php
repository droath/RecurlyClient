<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class AccountCoupon extends \RecurlyClient\Service\Account
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'redemption'];
        $this->setRequestTypes(
            [
                // Lookup information about the 'active' coupon redemption on
                // an account
                new RequestType('lookup', 'GET', $paths),
                // Remove a coupon from an account before it expires.
                new RequestType('delete', 'DELETE', $paths),
            ]
        );

        return $this;
    }
}
