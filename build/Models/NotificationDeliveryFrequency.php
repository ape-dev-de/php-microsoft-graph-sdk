<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotificationDeliveryFrequency - Enum
 */
enum NotificationDeliveryFrequency: string
{
    case UNKNOWN = 'unknown';
    case WEEKLY = 'weekly';
    case BIWEEKLY = 'biWeekly';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
