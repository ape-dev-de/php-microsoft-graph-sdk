<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityImportStatus - Enum
 */
enum ImportedWindowsAutopilotDeviceIdentityImportStatus: string
{
    case UNKNOWN = 'unknown';
    case PENDING = 'pending';
    case PARTIAL = 'partial';
    case COMPLETE = 'complete';
    case ERROR = 'error';
}
