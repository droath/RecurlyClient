<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Subscription extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->setRequestTypes(
            [
                new RequestType('list', 'GET'),
                // Create a new subscription.
                new RequestType('create', 'POST', [], 201),
                // Lookup or return a list of all the subscriptions.
                new RequestType('lookup', 'GET', [':id']),
                // Request an update to a subscription that takes place
                // immediately or at renewal.
                new RequestType('update', 'PUT', [':id']),
                // Update a subscription's invoice notes before the next
                // renewal. Updating notes will not trigger the renewal.
                new RequestType('updateNotes', 'PUT', [':id', 'notes']),
                // Returns a preview for a subscription change applied to an
                // account without committing a subscription change or posting
                // an invoice.
                new RequestType('mockPreview', 'Post', [':id', 'preview'], 201),
                // Cancel a subscription so it remains active and then expires
                // at the end of the current bill cycle
                new RequestType('cancel', 'PUT', [':id', 'cancel']),
                // Reactivate a canceled subscription so it renews at the end of
                // the current bill cycle.
                new RequestType('reactivate', 'PUT', [':id', 'reactivate']),
                // You can terminate any active subscription immediately. You
                // also have the option to grant a full or partial refund to the
                // account.
                new RequestType('terminate', 'PUT', [':id', 'terminate']),
                // Postpone a subscription.
                new RequestType('postpone', 'PUT', [':id', 'postpone']),
                // Returns a preview for a new subscription applied to an
                // account.
                new RequestType('preview', 'POST', ['preview'], 201),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['subscriptions'];
    }
}
