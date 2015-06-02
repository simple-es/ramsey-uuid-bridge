<?php

/**
 * @license https://github.com/simple-es/ramsey-uuid-bridge/blob/master/LICENSE MIT
 */

namespace SimpleES\RamseyUuidBridge\Test\Auxiliary;

use SimpleES\RamseyUuidBridge\Identifier\Uuid;
use SimpleES\RamseyUuidBridge\Identifier\UuidCapabilities;

/**
 * @copyright Copyright (c) 2015 Future500 B.V.
 * @author    Jasper N. Brouwer <jasper@future500.nl>
 */
class OtherId implements Uuid
{
    use UuidCapabilities;
}
