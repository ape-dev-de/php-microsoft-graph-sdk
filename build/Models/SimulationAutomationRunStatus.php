<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomationRunStatus - Enum
 */
enum SimulationAutomationRunStatus: string
{
    case UNKNOWN = 'unknown';
    case RUNNING = 'running';
    case SUCCEEDED = 'succeeded';
    case FAILED = 'failed';
    case SKIPPED = 'skipped';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
