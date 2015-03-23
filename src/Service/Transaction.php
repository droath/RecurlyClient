<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Transaction extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->setRequestTypes(
            [
                // Returns a list of all the transactions.
                new RequestType('list', 'GET'),
                // Create transaction against given account.
                new RequestType('create', 'POST'),
                // Lists details for an individual transaction.
                new RequestType('lookup', 'GET', [':id']),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['transactions'];
    }
}
