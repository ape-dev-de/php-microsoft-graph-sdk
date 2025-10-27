<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingJapanTelevisionType - Enum
 * TV content rating labels in Japan
 */
enum RatingJapanTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case EXPLICITALLOWED = 'explicitAllowed';
}
