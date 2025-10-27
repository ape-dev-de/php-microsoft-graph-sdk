<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailabilityStatus - Enum
 */
enum BookingsAvailabilityStatus: string
{
    case AVAILABLE = 'available';
    case BUSY = 'busy';
    case SLOTSAVAILABLE = 'slotsAvailable';
    case OUTOFOFFICE = 'outOfOffice';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
