<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintScaling - Enum
 */
enum PrintScaling: string
{
    case AUTO = 'auto';
    case SHRINKTOFIT = 'shrinkToFit';
    case FILL = 'fill';
    case FIT = 'fit';
    case NONE = 'none';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
