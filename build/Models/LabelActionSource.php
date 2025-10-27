<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LabelActionSource - Enum
 */
enum LabelActionSource: string
{
    case MANUAL = 'manual';
    case AUTOMATIC = 'automatic';
    case RECOMMENDED = 'recommended';
    case NONE = 'none';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
