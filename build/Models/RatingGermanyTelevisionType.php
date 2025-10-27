<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingGermanyTelevisionType - Enum
 * TV content rating labels in Germany
 */
enum RatingGermanyTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case AGESABOVE6 = 'agesAbove6';
    case AGESABOVE12 = 'agesAbove12';
    case AGESABOVE16 = 'agesAbove16';
    case ADULTS = 'adults';
}
