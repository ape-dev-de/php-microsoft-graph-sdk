<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageRequestState - Enum
 */
enum AccessPackageRequestState: string
{
    case SUBMITTED = 'submitted';
    case PENDINGAPPROVAL = 'pendingApproval';
    case DELIVERING = 'delivering';
    case DELIVERED = 'delivered';
    case DELIVERYFAILED = 'deliveryFailed';
    case DENIED = 'denied';
    case SCHEDULED = 'scheduled';
    case CANCELED = 'canceled';
    case PARTIALLYDELIVERED = 'partiallyDelivered';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
