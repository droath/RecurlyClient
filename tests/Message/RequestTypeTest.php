<?php

namespace RecurlyClient\Test\Message;

class RequestTypeTest extends \PHPUnit_Framework_TestCase
{
    protected $type;

    public function setUp()
    {
        $this->type = new \RecurlyClient\Message\RequestType(
            'action','GET', [':id', 'path1']
        );
    }

    public function tearDown()
    {
        $this->type = null;
    }

    public function testSetPaths()
    {
        $this->type->setPaths(['path3']);
        $this->assertContains('path3', $this->type->getPaths());
    }

    public function testSetGetService()
    {
        $service = $this
            ->getMockBuilder('\RecurlyClient\ServiceAbstract')
            ->getMockForAbstractClass();

        $this->type->setService($service);

        $this->assertInstanceOf('\RecurlyClient\ServiceAbstract', $this->type->service());
    }

    public function testGetFullPath()
    {
        $service = $this
            ->getMockBuilder('\RecurlyClient\ServiceAbstract')
            ->setMethods(['identifier', 'basePath'])
            ->getMockForAbstractClass();

        $service
            ->expects($this->any())
            ->method('identifier')
            ->will($this->returnValue(1));

        $service
            ->expects($this->once())
            ->method('basePath')
            ->will($this->returnValue(['basePath1']));

        $this->type->setPaths(['path2']);

        $this->type->setService($service);

        $this->assertEquals('basePath1/1/path1/path2', $this->type->getFullPath());
    }

    /**
     * @expectedException RecurlyClient\Exception\MissingArgumentException
     */
    public function testGetFullPathtThrowException()
    {
        $service = $this
            ->getMockBuilder('\RecurlyClient\ServiceAbstract')
            ->setMethods(['identifier'])
            ->getMockForAbstractClass();

        $service
            ->expects($this->once())
            ->method('identifier')
            ->will($this->returnValue(null));

        $this->type->setService($service);

        $this->type->getFullPath();
    }
}
