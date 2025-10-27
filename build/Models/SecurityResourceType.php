<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResourceType - Enum
 */
enum SecurityResourceType: string
{
    case UNKNOWN = 'unknown';
    case ATTACKED = 'attacked';
    case RELATED = 'related';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
