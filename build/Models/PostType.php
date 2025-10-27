<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PostType - Enum
 */
enum PostType: string
{
    case REGULAR = 'regular';
    case QUICK = 'quick';
    case STRATEGIC = 'strategic';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
