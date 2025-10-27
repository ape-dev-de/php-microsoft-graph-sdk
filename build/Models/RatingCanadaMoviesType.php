<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingCanadaMoviesType - Enum
 * Movies rating labels in Canada
 */
enum RatingCanadaMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case AGESABOVE14 = 'agesAbove14';
    case AGESABOVE18 = 'agesAbove18';
    case RESTRICTED = 'restricted';
}
