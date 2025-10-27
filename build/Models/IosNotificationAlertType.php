<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNotificationAlertType - Enum
 * Notification Settings Alert Type.
 */
enum IosNotificationAlertType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case BANNER = 'banner';
    case MODAL = 'modal';
    case NONE = 'none';
}
