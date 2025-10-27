<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingFranceMoviesType - Enum
 * Movies rating labels in France
 */
enum RatingFranceMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case AGESABOVE10 = 'agesAbove10';
    case AGESABOVE12 = 'agesAbove12';
    case AGESABOVE16 = 'agesAbove16';
    case AGESABOVE18 = 'agesAbove18';
}
