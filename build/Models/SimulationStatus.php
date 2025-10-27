<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationStatus - Enum
 */
enum SimulationStatus: string
{
    case UNKNOWN = 'unknown';
    case DRAFT = 'draft';
    case RUNNING = 'running';
    case SCHEDULED = 'scheduled';
    case SUCCEEDED = 'succeeded';
    case FAILED = 'failed';
    case CANCELLED = 'cancelled';
    case EXCLUDED = 'excluded';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
