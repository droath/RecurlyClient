<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class AccountAdjustment extends \RecurlyClient\Service\Account
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'adjustments'];
        $this->setRequestTypes(
            [
                // Lists all charges and credits issued for a given account.
                new RequestType('list', 'GET', $paths),
                // Creates a one-time charge on an account. Charges are not
                // invoiced or collected immediately.
                new RequestType('create', 'POST', $paths, 201),
            ]
        );

        return $this;
    }
}
