<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RatingAppsType - Enum
 * Apps rating as in media content
 */
enum RatingAppsType: string
{
    case ALLALLOWED = 'allAllowed';
    case ALLBLOCKED = 'allBlocked';
    case AGESABOVE4 = 'agesAbove4';
    case AGESABOVE9 = 'agesAbove9';
    case AGESABOVE12 = 'agesAbove12';
    case AGESABOVE17 = 'agesAbove17';
}
