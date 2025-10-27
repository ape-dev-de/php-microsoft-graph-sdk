<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventAttendeeRegistrationStatus - Enum
 */
enum VirtualEventAttendeeRegistrationStatus: string
{
    case REGISTERED = 'registered';
    case CANCELED = 'canceled';
    case WAITLISTED = 'waitlisted';
    case PENDINGAPPROVAL = 'pendingApproval';
    case REJECTEDBYORGANIZER = 'rejectedByOrganizer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
