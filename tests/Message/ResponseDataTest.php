<?php

namespace RecurlyClient\Test\Message;

class ResposneDataTest extends \PHPUnit_Framework_TestCase
{
    protected $responseData;

    public function setUp()
    {
        $this->responseData = new \RecurlyClient\Message\ResponseData(
            new \SimpleXMLElement(
                file_get_contents(
                    'tests/Fixture/SimpleXMLElement.xml'
                )
            )
        );
    }

    public function tearDown()
    {
        $this->element = null;
    }

    public function testExtractOneDimensionalArray()
    {
        $array = $this->responseData->extract('array');

        $this->assertCount(4, $array);
        $this->assertInternalType('array', $array);
    }

    public function testExtractMultipleDimensionalArray()
    {
        $array = $this->responseData->extract('array');

        $this->assertCount(1, $array['item_3']);
        $this->assertInternalType('array', $array['item_3']);
    }

    public function testExtractXML()
    {
        $xml = $this->responseData->extract('xml');
        $this->assertXmlStringEqualsXmlFile('tests/Fixture/SimpleXMLElement.xml', $xml);
    }

    public function testExtractJson()
    {
        $this->assertJson($this->responseData->extract('json'));
    }

    public function testExtractNonExistingStringReturnsSimpleXMLElement()
    {
        $element = $this->responseData->extract('non-existent');
        $this->assertInstanceOf('SimpleXMLElement', $element);
    }
}
