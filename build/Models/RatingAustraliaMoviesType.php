<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingAustraliaMoviesType - Enum
 * Movies rating labels in Australia
 */
enum RatingAustraliaMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case MATURE = 'mature';
    case AGESABOVE15 = 'agesAbove15';
    case AGESABOVE18 = 'agesAbove18';
}
