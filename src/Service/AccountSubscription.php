<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class AccountSubscription extends \RecurlyClient\Service\Account
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $paths = [':id', 'subscriptions'];
        $this->setRequestTypes(
            [
                new RequestType('lookup', 'GET', $paths),
            ]
        );

        return $this;
    }
}
