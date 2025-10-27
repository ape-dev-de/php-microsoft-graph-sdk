<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskProcessingState - Enum
 */
enum PrintTaskProcessingState: string
{
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case COMPLETED = 'completed';
    case ABORTED = 'aborted';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
