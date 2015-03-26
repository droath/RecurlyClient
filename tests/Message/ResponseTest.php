<?php

namespace RecurlyClient\Test\Message;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    protected $response;

    public function setUp()
    {
        $this->response = new \RecurlyClient\Message\Response(
            new \GuzzleHttp\Message\Response('200')
        );
    }

    public function tearDown()
    {
        $this->response = null;
    }

    public function testGetResponse()
    {
        $this->assertInstanceOf(
            '\GuzzleHttp\Message\Response',
            $this->response->getResponse()
        );
    }

    public function testGetStatusCode()
    {
        $this->assertEquals(200, $this->response->getStatusCode());
    }

    public function testGetReasonPhrase()
    {
        $this->assertEquals('OK', $this->response->getReasonPhrase());
    }

    public function testGetHeaders()
    {
        $this->assertInternalType('array', $this->response->getHeaders());
    }

    public function testGetData()
    {
        $response = $this->response->getResponse();
        $response->setBody(
            \GuzzleHttp\Stream\Stream::factory(
                fopen('tests/Fixture/SimpleXMLElement.xml', 'r')
            )
        );
        $this->response->setResponse($response);

        $this->assertInstanceOf(
            '\RecurlyClient\Message\ResponseData',
            $this->response->getData()
        );
    }

    /**
     * @expectedException \RecurlyClient\Exception\ResponseException
     * @expectedExceptionMessage TestXMLException
     * @expectedExceptionCode 200
     */
    public function testGetDataThrowException()
    {
        $responseStub = $this
            ->getMockBuilder('\GuzzleHttp\Message\Response')
            ->setMethods(['xml'])
            ->disableOriginalConstructor()
            ->getMock();

        $responseStub
            ->expects($this->once())
            ->method('xml')
            ->will($this->throwException(
                new \Exception('TestXMLException', 200)
            ));

        $this->response
            ->setResponse($responseStub)
            ->getData();
    }
}
