<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Adjustment extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->setRequestTypes(
            [
                // Returns a list of the accounts on your site.
                new RequestType('lookup', 'GET', [':id']),
                // Returns a list of the accounts on your site.
                new RequestType('delete', 'DELETE', [':id'], 204),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['adjustments'];
    }
}
