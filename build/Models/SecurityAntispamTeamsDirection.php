<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAntispamTeamsDirection - Enum
 */
enum SecurityAntispamTeamsDirection: string
{
    case UNKNOWN = 'unknown';
    case INBOUND = 'inbound';
    case OUTBOUND = 'outbound';
    case INTRAORG = 'intraorg';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
