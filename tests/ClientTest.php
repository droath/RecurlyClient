<?php

namespace RecurlyClient\Test;

/**
 * @coversDefaultClass \RecurlyClient\Client
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    public function setUp()
    {
        $this->client = new \RecurlyClient\Client(
            new \RecurlyClient\Config('123456', 'TEST')
        );
    }

    public function tearDown()
    {
        $this->client = null;
    }

    /**
     * @covers ::getHttpBaseUrl
     */
    public function testClientBaseUrl()
    {
        $url = $this->client->http()->getBaseUrl();
        $this->assertEquals('https://TEST.recurly.com/v2', $url);
    }

    /**
     * @covers ::buildRequest
     * @covers ::setOptions
     */
    public function testBuildRequest()
    {
        $options = ['headers' => ['TestKey' => 'TestValue']];
        $request = $this->client->buildRequest('GET', $options);

        $this->assertInstanceOf('\GuzzleHttp\Message\Request', $request);

        return $request;
    }

    /**
     * @depends testBuildRequest
     */
    public function testBuildRequestMethod($request)
    {
        $this->assertEquals('GET', $request->getMethod());
    }

    /**
     * @depends testBuildRequest
     */
    public function testBuildRequestOptions($request)
    {
        $this->assertArrayHasKey('TestKey', $request->getHeaders());
    }

    /**
     * @depends testBuildRequest
     * @covers ::send
     */
    public function testSend($request)
    {
        $request->getEmitter()->attach(
            new \GuzzleHttp\Subscriber\Mock(
                [new \GuzzleHttp\Message\Response('200')]
            )
        );
        $response = $this->client->send($request);

        $this->assertInstanceOf('\GuzzleHttp\Message\Response', $response);
    }

    /**
     * @covers ::getConfig
     */
    public function testConfigInstance()
    {
        $this->assertInstanceOf('\RecurlyClient\Config', $this->client->getConfig());
    }

    /**
     * @covers ::http
     */
    public function testHttpInstance()
    {
        $this->assertInstanceOf('\GuzzleHttp\Client', $this->client->http());
    }
}
