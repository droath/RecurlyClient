<?php

namespace Vendor\packages\recurly_client\tests\Entity;

class EntityAbstractTest extends \PHPUnit_Framework_TestCase
{
    protected $entityAbstractMock;

    public function setUp()
    {
        $this->entityAbstractMock = $this
            ->getMockBuilder('\RecurlyClient\Entity\EntityAbstract')
            ->getMockForAbstractClass();

        // Set the abstract mock properties.
        $this->entityAbstractMock->account_code = 1;
        $this->entityAbstractMock->email        = 'verena@example.com';
        $this->entityAbstractMock->first_name   = 'verena';
        $this->entityAbstractMock->last_name    = 'example';
    }

    public function testSerializeXML()
    {
        $this->entityAbstractMock
            ->expects($this->once())
            ->method('name')
            ->will($this->returnValue('account'));

        $this->assertXmlStringEqualsXmlFile(
            'tests/Fixture/Entity/Account.xml',
            $this->entityAbstractMock->serialize()
        );
    }

    public function testSerializeJSON()
    {
        $this->entityAbstractMock
            ->setSerializeFormat('json');

        $this->assertJsonStringEqualsJsonFile(
            'tests/Fixture/Entity/Account.json',
            $this->entityAbstractMock->serialize()
        );
    }

    public function testSerializeFormat()
    {
        $entity = $this
            ->entityAbstractMock
            ->setSerializeFormat('json');

        $this->assertSame($this->entityAbstractMock, $entity);
    }

    /**
     * @expectedException \RecurlyClient\Exception\InvalidArgumentException
     * @expectedExceptionMessage Invalid serialize format argument was defined.
     */
    public function testSetSerializeFormatThrowException()
    {
        $this->entityAbstractMock->setSerializeFormat(null);
    }

    /**
     * @expectedException \RecurlyClient\Exception\InvalidArgumentException
     * @expectedExceptionMessage Invalid serialize key/value context was define.
     */
    public function testSetSerializeContextThrowException()
    {
        $this->entityAbstractMock->setSerializeContext(null, null);
    }
}
