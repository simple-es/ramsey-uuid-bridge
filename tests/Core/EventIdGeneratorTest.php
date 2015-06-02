<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Test\Core;

use SimpleES\RamseyUuidBridge\Identifier\Generator\EventIdGenerator;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
class EventIdGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itGeneratesVersion4Uuids()
    {
        $generator = new EventIdGenerator();

        $eventId = $generator->generateIdentifier();

        $this->assertInstanceOf('SimpleES\RamseyUuidBridge\Identifier\EventId', $eventId);
    }
}
