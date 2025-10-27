<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingUnitedKingdomMoviesType - Enum
 * Movies rating labels in United Kingdom
 */
enum RatingUnitedKingdomMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case UNIVERSALCHILDREN = 'universalChildren';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case AGESABOVE12VIDEO = 'agesAbove12Video';
    case AGESABOVE12CINEMA = 'agesAbove12Cinema';
    case AGESABOVE15 = 'agesAbove15';
    case ADULTS = 'adults';
}
