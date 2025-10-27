<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperationStatus - Enum
 */
enum OperationStatus: string
{
    case NOTSTARTED = 'NotStarted';
    case RUNNING = 'Running';
    case COMPLETED = 'Completed';
    case FAILED = 'Failed';
}
