<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomationStatus - Enum
 */
enum SimulationAutomationStatus: string
{
    case UNKNOWN = 'unknown';
    case DRAFT = 'draft';
    case NOTRUNNING = 'notRunning';
    case RUNNING = 'running';
    case COMPLETED = 'completed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
