<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingNewZealandMoviesType - Enum
 * Movies rating labels in New Zealand
 */
enum RatingNewZealandMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case MATURE = 'mature';
    case AGESABOVE13 = 'agesAbove13';
    case AGESABOVE15 = 'agesAbove15';
    case AGESABOVE16 = 'agesAbove16';
    case AGESABOVE18 = 'agesAbove18';
    case RESTRICTED = 'restricted';
    case AGESABOVE16RESTRICTED = 'agesAbove16Restricted';
}
