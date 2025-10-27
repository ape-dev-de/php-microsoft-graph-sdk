<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityReviewSetSettings - Enum
 */
enum SecurityReviewSetSettings: string
{
    case NONE = 'none';
    case DISABLEGROUPING = 'disableGrouping';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
