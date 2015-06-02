<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Test\Core;

use SimpleES\RamseyUuidBridge\Identifier\EventId;
use SimpleES\RamseyUuidBridge\Test\Auxiliary\OtherId;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
class EventIdTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itGeneratesItself()
    {
        $id = EventId::generate();
        $this->assertInstanceOf('SimpleES\RamseyUuidBridge\Identifier\Uuid', $id);
    }

    /**
     * @test
     */
    public function itIsCreatedFromAndConvertedToAString()
    {
        $string = '83ead1ec-7a43-4c2a-a0b0-bb053a52c30b';

        $id = EventId::fromString($string);
        $this->assertInstanceOf('SimpleES\RamseyUuidBridge\Identifier\Uuid', $id);

        $this->assertSame($string, $id->toString());
    }

    /**
     * @test
     * @expectedException \SimpleES\RamseyUuidBridge\Exception\InvalidUuid
     */
    public function itIsNotCreatedIfTheStringIsInvalid()
    {
        EventId::fromString('not-a-uuid');
    }

    /**
     * @test
     */
    public function itIsCreatedFromAndConvertedToABinaryString()
    {
        $string = base64_decode('g+rR7HpDTCqgsLsFOlLDCw==');

        $id = EventId::fromBytes($string);
        $this->assertInstanceOf('SimpleES\RamseyUuidBridge\Identifier\Uuid', $id);

        $this->assertSame($string, $id->toBytes());
    }

    /**
     * @test
     * @expectedException \SimpleES\RamseyUuidBridge\Exception\InvalidUuid
     */
    public function itIsNotCreatedIfTheBinaryStringIsInvalid()
    {
        EventId::fromBytes('not-a-uuid');
    }

    /**
     * @test
     */
    public function itConvertsToAStringMagically()
    {
        $string = '83ead1ec-7a43-4c2a-a0b0-bb053a52c30b';
        $id     = EventId::fromString($string);

        $this->assertSame($string, (string) $id);
    }

    /**
     * @test
     */
    public function itEqualsAnotherWithTheSameClassAndValue()
    {
        $id    = EventId::fromString('83ead1ec-7a43-4c2a-a0b0-bb053a52c30b');
        $other = EventId::fromString('83ead1ec-7a43-4c2a-a0b0-bb053a52c30b');

        $this->assertTrue($id->equals($other));
    }

    /**
     * @test
     */
    public function itDoesNotEqualAnotherWithADifferentClass()
    {
        $id    = EventId::fromString('83ead1ec-7a43-4c2a-a0b0-bb053a52c30b');
        $other = OtherId::fromString('83ead1ec-7a43-4c2a-a0b0-bb053a52c30b');

        $this->assertNotTrue($id->equals($other));
    }

    /**
     * @test
     */
    public function itDoesNotEqualAnotherWithADifferentValue()
    {
        $id    = EventId::fromString('83ead1ec-7a43-4c2a-a0b0-bb053a52c30b');
        $other = EventId::fromString('2ef9a108-10a4-4083-a996-7dbe6069b47f');

        $this->assertNotTrue($id->equals($other));
    }
}
