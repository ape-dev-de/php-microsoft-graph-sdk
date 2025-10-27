<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefenderMonitorFileActivity - Enum
 * Possible values for monitoring file activity.
 */
enum DefenderMonitorFileActivity: string
{
    case USERDEFINED = 'userDefined';
    case DISABLE = 'disable';
    case MONITORALLFILES = 'monitorAllFiles';
    case MONITORINCOMINGFILESONLY = 'monitorIncomingFilesOnly';
    case MONITOROUTGOINGFILESONLY = 'monitorOutgoingFilesOnly';
}
