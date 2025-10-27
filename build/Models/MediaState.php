<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaState - Enum
 */
enum MediaState: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
