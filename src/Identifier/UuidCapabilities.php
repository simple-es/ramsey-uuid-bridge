<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Identifier;

use Rhumsaa\Uuid\Uuid as RamseyUuid;
use SimpleES\RamseyUuidBridge\Exception\InvalidUuid;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
trait UuidCapabilities
{
    /**
     * @var RamseyUuid
     */
    private $uuid;

    /**
     * @return static
     */
    public static function generate()
    {
        return new static(RamseyUuid::uuid4());
    }

    /**
     * @param string $bytes
     * @return static
     */
    public static function fromBytes($bytes)
    {
        try {
            return new static(RamseyUuid::fromBytes($bytes));
        } catch (\InvalidArgumentException $e) {
            throw InvalidUuid::create(base64_encode($bytes) . ' (base64 encoded)', $e);
        }
    }

    /**
     * @param string $string
     * @return static
     */
    public static function fromString($string)
    {
        try {
            return new static(RamseyUuid::fromString($string));
        } catch (\InvalidArgumentException $e) {
            throw InvalidUuid::create($string, $e);
        }
    }

    /**
     * @param mixed $other
     * @return bool
     */
    public function equals($other)
    {
        return ($other instanceof static && $this->uuid->equals($other->uuid));
    }

    /**
     * @return string
     */
    public function toBytes()
    {
        return $this->uuid->getBytes();
    }

    /**
     * @return string
     */
    public function toString()
    {
        return $this->uuid->toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @param RamseyUuid $uuid
     */
    private function __construct(RamseyUuid $uuid)
    {
        $this->uuid = $uuid;
    }
}
