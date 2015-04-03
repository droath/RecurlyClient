<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Invoice extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
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
                // Lookup an invoice to retrieve detailed information about its
                // line items and payments.
                new RequestType('lookup', 'GET', [':id']),
                // Mark an invoice as paid successfully.
                new RequestType('markSuccessful', 'PUT', [':id', 'mark_successful']),
                // Mark an invoice as failed collection.
                new RequestType('markFailed', 'PUT', [':id', 'mark_failed']),
                // Allows specific invoice to be refunded.
                new RequestType('refund', 'POST', [':id', 'refund'], 201),
                // Allows you to enter an offline payment for a manual invoice,
                // such as a check or money order.
                new RequestType('transactions', 'POST', [':id', 'transactions'], 201),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['invoices'];
    }
}
