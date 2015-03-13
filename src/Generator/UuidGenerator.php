<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Generator;

use Rhumsaa\Uuid\Uuid as RhumsaaGenerator;
use SimpleES\EventSourcing\Generator\GeneratesIdentifiers;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
final class UuidGenerator implements GeneratesIdentifiers
{
    /**
     * {@inheritdoc}
     */
    public function generateIdentifier()
    {
        return (string) RhumsaaGenerator::uuid4();
    }
}
