<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Identifier;

use SimpleES\EventSourcing\Identifier\CreatesIdentifiers;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
final class EventIdFactory implements CreatesIdentifiers
{
    /**
     * {@inheritdoc}
     */
    public function generate()
    {
        return EventId::generate();
    }

    /**
     * {@inheritdoc}
     */
    public function fromString($string)
    {
        return EventId::fromString($string);
    }
}
