<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingJapanMoviesType - Enum
 * Movies rating labels in Japan
 */
enum RatingJapanMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case AGESABOVE15 = 'agesAbove15';
    case AGESABOVE18 = 'agesAbove18';
}
