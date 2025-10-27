<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutoRestartNotificationDismissalMethod - Enum
 * Auto restart required notification dismissal method
 */
enum AutoRestartNotificationDismissalMethod: string
{
    case NOTCONFIGURED = 'notConfigured';
    case AUTOMATIC = 'automatic';
    case USER = 'user';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
