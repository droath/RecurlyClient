<?php

namespace RecurlyClient\Test;

/**
 * @coversDefaultClass \RecurlyClient\Client
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        $this->config = new \RecurlyClient\Config('123456', 'subdomain', 10);
    }

    public function tearDown()
    {
        $this->config = null;
    }

    public function testGetApiKey()
    {
        $this->assertEquals('123456', $this->config->getApiKey());
    }

    public function testGetVersion()
    {
        $this->assertEquals('v10', $this->config->getVersion());
    }

    public function testGetSubdomain()
    {
        $this->assertEquals('subdomain', $this->config->getSubdomain());
    }
}
