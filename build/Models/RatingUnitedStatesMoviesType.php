<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingUnitedStatesMoviesType - Enum
 * Movies rating labels in United States
 */
enum RatingUnitedStatesMoviesType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case PARENTALGUIDANCE13 = 'parentalGuidance13';
    case RESTRICTED = 'restricted';
    case ADULTS = 'adults';
}
