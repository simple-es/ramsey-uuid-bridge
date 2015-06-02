<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Identifier;

use SimpleES\EventSourcing\Identifier\GeneratesItself;
use SimpleES\EventSourcing\Identifier\Identifies;
use SimpleES\EventSourcing\Identifier\IsBinary;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
interface Uuid extends Identifies, IsBinary, GeneratesItself
{
}
