<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentState - Enum
 */
enum AccessPackageAssignmentState: string
{
    case DELIVERING = 'delivering';
    case PARTIALLYDELIVERED = 'partiallyDelivered';
    case DELIVERED = 'delivered';
    case EXPIRED = 'expired';
    case DELIVERYFAILED = 'deliveryFailed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
