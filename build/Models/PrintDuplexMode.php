<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDuplexMode - Enum
 */
enum PrintDuplexMode: string
{
    case FLIPONLONGEDGE = 'flipOnLongEdge';
    case FLIPONSHORTEDGE = 'flipOnShortEdge';
    case ONESIDED = 'oneSided';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
