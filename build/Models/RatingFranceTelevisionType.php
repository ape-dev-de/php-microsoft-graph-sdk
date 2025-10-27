<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingFranceTelevisionType - Enum
 * TV content rating labels in France
 */
enum RatingFranceTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case AGESABOVE10 = 'agesAbove10';
    case AGESABOVE12 = 'agesAbove12';
    case AGESABOVE16 = 'agesAbove16';
    case AGESABOVE18 = 'agesAbove18';
}
