<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPortStatus - Enum
 */
enum SecurityHostPortStatus: string
{
    case OPEN = 'open';
    case FILTERED = 'filtered';
    case CLOSED = 'closed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
