<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class AccountTransaction extends \RecurlyClient\Service\Account
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'transactions'];
        $this->setRequestTypes(
            [
                // Returns a list of transactions for an account.
                new RequestType('lookup', 'GET', $paths),
            ]
        );

        return $this;
    }
}
