<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobProcessingState - Enum
 */
enum PrintJobProcessingState: string
{
    case UNKNOWN = 'unknown';
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case PAUSED = 'paused';
    case STOPPED = 'stopped';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
    case ABORTED = 'aborted';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
