<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementReportStatus - Enum
 * Possible statuses associated with a generated report.
 */
enum DeviceManagementReportStatus: string
{
    case UNKNOWN = 'unknown';
    case NOTSTARTED = 'notStarted';
    case INPROGRESS = 'inProgress';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
}
