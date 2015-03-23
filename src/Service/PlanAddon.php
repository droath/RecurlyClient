<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class PlanAddon extends \RecurlyClient\Service\Plan
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'add_ons'];
        $this->setRequestTypes(
            [
                // A list or a single add-on to a plan.
                new RequestType('lookup', 'GET', $paths),
                // Add an add-on to a plan.
                new RequestType('create', 'POST', $paths),
                // Update an add-on from a plan.
                new RequestType('update', 'PUT', $paths),
                // Remove an add-on from a plan.
                new RequestType('delete', 'DELETE', $paths),
            ]
        );

        return $this;
    }
}
