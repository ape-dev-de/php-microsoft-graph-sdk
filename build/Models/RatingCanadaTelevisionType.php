<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingCanadaTelevisionType - Enum
 * TV content rating labels in Canada
 */
enum RatingCanadaTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case CHILDREN = 'children';
    case CHILDRENABOVE8 = 'childrenAbove8';
    case GENERAL = 'general';
    case PARENTALGUIDANCE = 'parentalGuidance';
    case AGESABOVE14 = 'agesAbove14';
    case AGESABOVE18 = 'agesAbove18';
}
