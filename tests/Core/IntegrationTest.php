<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Test\Core;

use SimpleES\RamseyUuidBridge\Identifier\UuidGenerator;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
class IntegrationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itGeneratesVersion4Uuids()
    {
        $uuidGenerator = new UuidGenerator();

        $uuid = $uuidGenerator->generateIdentifier();

        $this->assertInternalType('string', $uuid);
        $this->assertRegExp('/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/', $uuid);
    }
}
