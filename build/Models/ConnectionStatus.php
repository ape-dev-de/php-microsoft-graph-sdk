<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectionStatus - Enum
 */
enum ConnectionStatus: string
{
    case UNKNOWN = 'unknown';
    case ATTEMPTED = 'attempted';
    case SUCCEEDED = 'succeeded';
    case BLOCKED = 'blocked';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
