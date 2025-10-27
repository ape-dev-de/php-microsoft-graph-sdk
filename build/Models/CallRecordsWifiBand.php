<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsWifiBand - Enum
 */
enum CallRecordsWifiBand: string
{
    case UNKNOWN = 'unknown';
    case FREQUENCY24GHZ = 'frequency24GHz';
    case FREQUENCY50GHZ = 'frequency50GHz';
    case FREQUENCY60GHZ = 'frequency60GHz';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
