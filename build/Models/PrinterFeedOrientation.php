<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterFeedOrientation - Enum
 */
enum PrinterFeedOrientation: string
{
    case LONGEDGEFIRST = 'longEdgeFirst';
    case SHORTEDGEFIRST = 'shortEdgeFirst';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
