<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RejectReason - Enum
 */
enum RejectReason: string
{
    case NONE = 'none';
    case BUSY = 'busy';
    case FORBIDDEN = 'forbidden';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
