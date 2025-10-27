<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadDeliveryPlatform - Enum
 */
enum PayloadDeliveryPlatform: string
{
    case UNKNOWN = 'unknown';
    case SMS = 'sms';
    case EMAIL = 'email';
    case TEAMS = 'teams';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
