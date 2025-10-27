<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationPreference - Enum
 */
enum EndUserNotificationPreference: string
{
    case UNKNOWN = 'unknown';
    case MICROSOFT = 'microsoft';
    case CUSTOM = 'custom';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
