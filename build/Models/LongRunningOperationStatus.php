<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LongRunningOperationStatus - Enum
 */
enum LongRunningOperationStatus: string
{
    case NOTSTARTED = 'notStarted';
    case RUNNING = 'running';
    case SUCCEEDED = 'succeeded';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
