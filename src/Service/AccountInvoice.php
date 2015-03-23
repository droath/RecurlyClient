<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class AccountInvoice extends \RecurlyClient\Service\Account
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'invoices'];
        $this->setRequestTypes(
            [
                // Lists all charges and credits issued for a given account.
                new RequestType('list', 'GET', $paths),
                // Preview allows you to display the invoice details, including
                // estimated tax, before you post it.
                new RequestType('preview', 'POST', $paths),
                // An account is automatically invoiced when the subscription
                // renews. However, there are times when it is appropriate to
                // invoice an account before the renewal.
                new RequestType('create', 'POST', $paths),
            ]
        );

        return $this;
    }
}
