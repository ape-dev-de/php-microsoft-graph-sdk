<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SafeSearchFilterType - Enum
 * Specifies what level of safe search (filtering adult content) is required
 */
enum SafeSearchFilterType: string
{
    case USERDEFINED = 'userDefined';
    case STRICT = 'strict';
    case MODERATE = 'moderate';
}
