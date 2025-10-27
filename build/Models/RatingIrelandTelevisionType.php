<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingIrelandTelevisionType - Enum
 * TV content rating labels in Ireland
 */
enum RatingIrelandTelevisionType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case GENERAL = 'general';
    case CHILDREN = 'children';
    case YOUNGADULTS = 'youngAdults';
    case PARENTALSUPERVISION = 'parentalSupervision';
    case MATURE = 'mature';
}
