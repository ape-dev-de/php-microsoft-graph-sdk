<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventStatusType - Enum
 */
enum SecurityEventStatusType: string
{
    case PENDING = 'pending';
    case ERROR = 'error';
    case SUCCESS = 'success';
    case NOTAVALIABLE = 'notAvaliable';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
