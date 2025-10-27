<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeploymentStatus - Enum
 */
enum SecurityDeploymentStatus: string
{
    case UPTODATE = 'upToDate';
    case OUTDATED = 'outdated';
    case UPDATING = 'updating';
    case UPDATEFAILED = 'updateFailed';
    case NOTCONFIGURED = 'notConfigured';
    case UNREACHABLE = 'unreachable';
    case DISCONNECTED = 'disconnected';
    case STARTFAILURE = 'startFailure';
    case SYNCING = 'syncing';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
