<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityPurgeType - Enum
 */
enum SecurityPurgeType: string
{
    case RECOVERABLE = 'recoverable';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case PERMANENTLYDELETE = 'permanentlyDelete';
}
