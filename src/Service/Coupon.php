<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class Coupon extends \RecurlyClient\ServiceAbstract implements \RecurlyClient\ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->setRequestTypes(
            [
                // Returns a list of all the coupons.
                new RequestType('list', 'GET'),
                // Creates a new coupon.
                new RequestType('create', 'POST', [], 201),
                // Returns information about an active coupon.
                new RequestType('lookup', 'GET', [':id']),
                //  Deactivate the coupon so customers can no longer redeem the
                //  coupon.
                new RequestType('deactivate', 'DELETE', [':id'], 204),
            ]
        );

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function basePath()
    {
        return ['coupons'];
    }
}
