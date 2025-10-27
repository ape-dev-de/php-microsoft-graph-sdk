<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTeamsMessageDeliveryAction - Enum
 */
enum SecurityTeamsMessageDeliveryAction: string
{
    case UNKNOWN = 'unknown';
    case DELIVEREDASSPAM = 'deliveredAsSpam';
    case DELIVERED = 'delivered';
    case BLOCKED = 'blocked';
    case REPLACED = 'replaced';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
