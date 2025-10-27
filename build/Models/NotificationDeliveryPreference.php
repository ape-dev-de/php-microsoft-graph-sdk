<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotificationDeliveryPreference - Enum
 */
enum NotificationDeliveryPreference: string
{
    case UNKNOWN = 'unknown';
    case DELIVERIMMEDIETLY = 'deliverImmedietly';
    case DELIVERAFTERCAMPAIGNEND = 'deliverAfterCampaignEnd';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
