<?php

namespace RecurlyClient\Test\Message;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    protected $request;

    public function setUp()
    {
        $type = new \RecurlyClient\Message\RequestType(
            'action','GET', ['path1', 'path2']
        );
        $service = $this
            ->getMockBuilder('\RecurlyClient\ServiceAbstract')
            ->setMethods(['client', 'basePath'])
            ->getMock();

        $client = new \RecurlyClient\Client(
            new \RecurlyClient\Config('12345', 'subdomain')
        );
        $client->setHttpEmitterSubscriber(new \GuzzleHttp\Subscriber\Mock(
            [new \GuzzleHttp\Message\Response('200')]
        ));

        $service
            ->method('client')
            ->will($this->returnValue($client));
        $service
            ->method('basePath')
            ->will($this->returnValue(['basePath1']));

        $type->setService($service);

        $this->request = new \RecurlyClient\Message\Request($type);
    }

    public function tearDown()
    {
        $this->request = null;
    }

    public function testExecute()
    {
        $response = $this->request->execute();
        $this->assertInstanceOf('\RecurlyClient\Message\Response', $response);
    }

    public function testExecuteWithEntity()
    {
        $entity = $this
            ->getMockBuilder('\RecurlyClient\Entity\EntityAbstract')
            ->getMock();

        $entity
            ->expects($this->once())
            ->method('serialize')
            ->will($this->returnValue('serialize_string'));

        $this->request->execute($entity);

        $options = $this->request->getOptions();

        $this->assertTrue(isset($options['body']));
        $this->assertContains('serialize_string', $options);
    }

    public function testGetType()
    {
        $this->assertInstanceOf(
            '\RecurlyClient\Message\RequestType',
            $this->request->getType()
        );
    }

    public function testOptons()
    {
        $this->request->option('testKey', 'testValue');
        $options = $this->request->getOptions();

        $this->assertArrayHasKey('testKey', $options);
    }

   /**
     * @expectedException \RecurlyClient\Exception\InvalidArgumentException
     */
    public function testExecuteWithEntityThrowException()
    {
        $this->request->execute('string');
    }

    /**
     * @expectedException \RecurlyClient\Exception\InvalidArgumentException
     */
    public function testOptionsThrowException()
    {
        $this->request->option(null, null);
    }
}
