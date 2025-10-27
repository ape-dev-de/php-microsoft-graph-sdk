<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingIrelandMoviesType - Enum
 * Movies rating labels in Ireland
 */
enum RatingIrelandMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case AGESABOVE12 = 'agesAbove12';
    case AGESABOVE15 = 'agesAbove15';
    case AGESABOVE16 = 'agesAbove16';
    case ADULTS = 'adults';
}
