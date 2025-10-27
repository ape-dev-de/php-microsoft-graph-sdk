<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateNotificationDisplayOption - Enum
 * Windows Update Notification Display Options
 */
enum WindowsUpdateNotificationDisplayOption: string
{
    case NOTCONFIGURED = 'notConfigured';
    case DEFAULTNOTIFICATIONS = 'defaultNotifications';
    case RESTARTWARNINGSONLY = 'restartWarningsOnly';
    case DISABLEALLNOTIFICATIONS = 'disableAllNotifications';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
