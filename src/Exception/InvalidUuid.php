<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Exception;

use SimpleES\EventSourcing\Exception\Exception;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
class InvalidUuid extends \InvalidArgumentException implements Exception
{
    /**
     * @param string          $value
     * @param \Exception|null $previous
     * @return InvalidUuid
     */
    public static function create($value, \Exception $previous = null)
    {
        return new InvalidUuid(
            sprintf(
                'Expected a valid UUID, but got %s',
                $value
            ),
            0,
            $previous
        );
    }
}
