<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Identifier\Generator;

use SimpleES\EventSourcing\Identifier\Generator\GeneratesIdentifiers;
use SimpleES\RamseyUuidBridge\Identifier\EventId;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
final class EventIdGenerator implements GeneratesIdentifiers
{
    /**
     * {@inheritdoc}
     */
    public function generateIdentifier()
    {
        return EventId::generate();
    }
}
