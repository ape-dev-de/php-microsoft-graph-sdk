<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamVisibilityType - Enum
 */
enum TeamVisibilityType: string
{
    case PRIVATE = 'private';
    case PUBLIC = 'public';
    case HIDDENMEMBERSHIP = 'hiddenMembership';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
