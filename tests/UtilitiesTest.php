<?php

namespace RecurlyClient\Test;

/**
 * @coversDefaultClass \RecurlyClient\Utilities
 */
class UtilitiesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::DefaultSerializer
     */
    public function testDefaultSerializer()
    {
        $serilaizer = \RecurlyClient\Utilities::DefaultSerializer();
        $this->assertInstanceOf('Symfony\Component\Serializer\Serializer', $serilaizer);
    }
}
