<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GiphyRatingType - Enum
 */
enum GiphyRatingType: string
{
    case STRICT = 'strict';
    case MODERATE = 'moderate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
