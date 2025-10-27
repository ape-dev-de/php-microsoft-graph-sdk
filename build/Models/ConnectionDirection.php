<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectionDirection - Enum
 */
enum ConnectionDirection: string
{
    case UNKNOWN = 'unknown';
    case INBOUND = 'inbound';
    case OUTBOUND = 'outbound';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
