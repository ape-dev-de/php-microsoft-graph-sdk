<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperationStatus - Enum
 */
enum WorkbookOperationStatus: string
{
    case NOTSTARTED = 'notStarted';
    case RUNNING = 'running';
    case SUCCEEDED = 'succeeded';
    case FAILED = 'failed';
}
