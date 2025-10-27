<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityUploadStatus - Enum
 */
enum ImportedWindowsAutopilotDeviceIdentityUploadStatus: string
{
    case NOUPLOAD = 'noUpload';
    case PENDING = 'pending';
    case COMPLETE = 'complete';
    case ERROR = 'error';
}
