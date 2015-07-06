<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Test\Core;

use SimpleES\RamseyUuidBridge\Identifier\EventIdFactory;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
class EventIdFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EventIdFactory
     */
    private $eventIdFactory;

    protected function setUp()
    {
        $this->eventIdFactory = new EventIdFactory();
    }

    /**
     * @test
     */
    public function itGeneratesVersion4Uuids()
    {
        $eventId = $this->eventIdFactory->generate();

        $this->assertInstanceOf('SimpleES\RamseyUuidBridge\Identifier\EventId', $eventId);
        $this->assertRegExp(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i',
            $eventId->toString()
        );
    }

    /**
     * @test
     */
    public function itCreatesUuidsFromString()
    {
        $string = '83ead1ec-7a43-4c2a-a0b0-bb053a52c30b';

        $eventId = $this->eventIdFactory->fromString($string);

        $this->assertInstanceOf('SimpleES\RamseyUuidBridge\Identifier\EventId', $eventId);
        $this->assertSame($string, $eventId->toString());
    }
}
