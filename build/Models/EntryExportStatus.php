<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntryExportStatus - Enum
 */
enum EntryExportStatus: string
{
    case NOOP = 'Noop';
    case SUCCESS = 'Success';
    case RETRYABLEERROR = 'RetryableError';
    case PERMANENTERROR = 'PermanentError';
    case ERROR = 'Error';
}
