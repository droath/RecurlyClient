<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class AccountBilling extends \RecurlyClient\Service\Account
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'billing_info'];
        $this->setRequestTypes(
            [
                // Returns only the account's current billing information.
                new RequestType('lookup', 'GET', $paths),
                // Updates an account's billing information.
                new RequestType('update', 'PUT', $paths),
                // You may remove any stored billing information for an account.
                new RequestType('clear', 'DELETE', $paths),
            ]
        );

        return $this;
    }
}
