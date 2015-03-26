<?php

namespace RescurlyClient\Test;

class ServiceAbstractTest extends \PHPUnit_Framework_TestCase
{
    protected $serviceAbstractMock;

    public function setUp()
    {
        $this->serviceAbstractMock = $this
            ->getMockBuilder('\RecurlyClient\ServiceAbstract')
            ->getMockForAbstractClass();
    }

    public function testSetAndGetIdentifier()
    {
        $this->serviceAbstractMock->setIdentifier('testing-1');
        $this->assertEquals(
            'testing-1',
            $this->serviceAbstractMock->identifier()
        );
    }

    public function testSetAndGetClient()
    {
        $this->serviceAbstractMock->setClient(
            new \RecurlyClient\Client(
                new \RecurlyClient\Config('123456', 'subdomain')
            )
        );

        $this->assertInstanceOf(
            '\RecurlyClient\Client',
            $this->serviceAbstractMock->client()
        );
    }

    /**
     * @expectedException \RecurlyClient\Exception\InvalidArgumentException
     * @expectedExceptionMessage The request type 'non_existent_action' wasn't found.
     * @expectedExceptionCode 404
     */
    public function testGetRequestTypeThrowException()
    {
        $this->serviceAbstractMock->getRequestType('non_existent_action');
    }
}
