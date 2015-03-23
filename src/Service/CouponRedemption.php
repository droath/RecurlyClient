<?php

namespace RecurlyClient\Service;

use RecurlyClient\Message\RequestType;

class CouponRedemption extends \RecurlyClient\Service\Coupon
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->setRequestTypes(
            [
                // Redeem a coupon for a customer after their initial
                // subscription, or in anticipation of a future subscription.
                new RequestType('redeem', 'POST', [':id', 'redeem']),
            ]
        );

        return $this;
    }
}
