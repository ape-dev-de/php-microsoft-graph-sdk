<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingAustraliaTelevisionType - Enum
 * TV content rating labels in Australia
 */
enum RatingAustraliaTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case PRESCHOOLERS = 'preschoolers';
    case CHILDREN = 'children';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case MATURE = 'mature';
    case AGESABOVE15 = 'agesAbove15';
    case AGESABOVE15ADULTVIOLENCE = 'agesAbove15AdultViolence';
}
