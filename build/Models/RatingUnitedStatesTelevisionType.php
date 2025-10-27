<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingUnitedStatesTelevisionType - Enum
 * TV content rating labels in United States
 */
enum RatingUnitedStatesTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case CHILDRENALL = 'childrenAll';
    case CHILDRENABOVE7 = 'childrenAbove7';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case CHILDRENABOVE14 = 'childrenAbove14';
    case ADULTS = 'adults';
}
