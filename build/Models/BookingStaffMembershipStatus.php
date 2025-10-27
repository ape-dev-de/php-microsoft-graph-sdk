<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingStaffMembershipStatus - Enum
 */
enum BookingStaffMembershipStatus: string
{
    case ACTIVE = 'active';
    case PENDINGACCEPTANCE = 'pendingAcceptance';
    case REJECTEDBYSTAFF = 'rejectedByStaff';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
