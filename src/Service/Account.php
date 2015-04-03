<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Account extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->setRequestTypes(
            [
                // Returns a list of the accounts on your site.
                new RequestType('list', 'GET'),
                // Creates a new account.
                new RequestType('create', 'POST', [], 201),
                // Returns information about a single account.
                new RequestType('lookup', 'GET', [':id']),
                // Updates an existing account.
                new RequestType('update', 'PUT', [':id']),
                // Marks an account as closed and cancels any active
                // subscriptions.
                new RequestType('close', 'DELETE', [':id'], 204),
                // Transitions a closed account back to active.
                new RequestType('reopen', 'PUT', [':id', 'reopen'], 204),
                // Returns a list of the notes on an account sorted in
                // descending order.
                new RequestType('listNotes', 'GET', [':id', 'notes']),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['accounts'];
    }
}
