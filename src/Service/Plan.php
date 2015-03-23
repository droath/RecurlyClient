<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Plan extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id'];
        $this->setRequestTypes(
            [
                // Lists all your active subscription plans.
                new RequestType('list', 'GET'),
                // Create a new subscription plan.
                new RequestType('create', 'POST'),
                // Lookup a plan's details.
                new RequestType('lookup', 'GET', $paths),
                // Update the pricing or details for a plan.
                new RequestType('update', 'PUT', $paths),
                // Deleting a plan makes it inactive.
                new RequestType('delete', 'DELETE', $paths),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['plans'];
    }
}
