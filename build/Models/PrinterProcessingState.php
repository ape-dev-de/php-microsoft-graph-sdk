<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterProcessingState - Enum
 */
enum PrinterProcessingState: string
{
    case UNKNOWN = 'unknown';
    case IDLE = 'idle';
    case PROCESSING = 'processing';
    case STOPPED = 'stopped';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
