<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceActionType - Enum
 * Scheduled Action Type Enum
 */
enum DeviceComplianceActionType: string
{
    case NOACTION = 'noAction';
    case NOTIFICATION = 'notification';
    case BLOCK = 'block';
    case RETIRE = 'retire';
    case WIPE = 'wipe';
    case REMOVERESOURCEACCESSPROFILES = 'removeResourceAccessProfiles';
    case PUSHNOTIFICATION = 'pushNotification';
}
