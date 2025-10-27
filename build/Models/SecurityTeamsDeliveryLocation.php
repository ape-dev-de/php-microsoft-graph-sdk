<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTeamsDeliveryLocation - Enum
 */
enum SecurityTeamsDeliveryLocation: string
{
    case UNKNOWN = 'unknown';
    case TEAMS = 'teams';
    case QUARANTINE = 'quarantine';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
