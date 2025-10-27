<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationSettingType - Enum
 */
enum EndUserNotificationSettingType: string
{
    case UNKNOWN = 'unknown';
    case NOTRAINING = 'noTraining';
    case TRAININGSELECTED = 'trainingSelected';
    case NONOTIFICATION = 'noNotification';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
