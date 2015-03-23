<?php

namespace RecurlyClient\Test;

use RecurlyClient\ServiceManager;

class ServiceManagerTest extends \PHPUnit_Framework_TestCase
{
    protected $client;
    protected $service;

    public function setUp()
    {
        $this->client = new \RecurlyClient\Client(
            new \RecurlyClient\Config('12345', 'subdomain')
        );

        $this->service = $this
            ->getMockBuilder('\RecurlyClient\ServiceInterface')
            ->setMethods(
                [
                    'register',
                    'basePath',
                    'setClient',
                    'getRequestTypes',
                    'getRequestType',
                ]
            )
            ->getMock();
    }

    public function tearDown()
    {
        $this->client = null;
    }

    public function serviceDataset()
    {
        return [
            [new \RecurlyClient\Service\Account()],
            [new \RecurlyClient\Service\AccountAdjustment()],
            [new \RecurlyClient\Service\AccountBilling()],
            [new \RecurlyClient\Service\AccountCoupon()],
            [new \RecurlyClient\Service\AccountInvoice()],
            [new \RecurlyClient\Service\AccountSubscription()],
            [new \RecurlyClient\Service\AccountTransaction()],
            [new \RecurlyClient\Service\Adjustment()],
            [new \RecurlyClient\Service\Coupon()],
            [new \RecurlyClient\Service\CouponRedemption()],
            [new \RecurlyClient\Service\Invoice()],
            [new \RecurlyClient\Service\Plan()],
            [new \RecurlyClient\Service\PlanAddon()],
            [new \RecurlyClient\Service\Subscription()],
            [new \RecurlyClient\Service\Transaction()],
        ];
    }

    /**
     * @dataProvider serviceDataset
     */
    public function testInvoke($service)
    {
        $manager = new ServiceManager($this->client, $service);

        foreach ($manager->getRequestTypes() as $action => $type) {

            // Assert the invoke method returns the proper Request object.
            $this->assertInstanceOf(
                '\RecurlyClient\Message\Request',
                $manager->invoke($action)
            );

            // Assert the request type has a service property.
            $this->assertObjectHasAttribute('service', $type);
        }

        // Assert the service register returns its self.
        $this->assertSame($service, $service->register());

        // Assert the service has a client property.
        $this->assertObjectHasAttribute('client', $service);

        // Assert the base path is casted as an array.
        $this->assertInternalType('array', $service->basePath());
    }

    /**
     * @expectedException \RecurlyClient\Exception\RequestTypeException
     */
    public function testGetRequestTypeThrowException()
    {
        $this->service
            ->expects($this->once())
            ->method('getRequestType')
            ->will(
                $this->throwException(
                    new \RecurlyClient\Exception\InvalidArgumentException()
                )
            );
        $manager = new ServiceManager($this->client, $this->service);

        $type = $manager->getRequestType('non_existent');
    }
}
