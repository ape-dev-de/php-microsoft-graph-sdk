<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingReminderRecipients - Enum
 */
enum BookingReminderRecipients: string
{
    case ALLATTENDEES = 'allAttendees';
    case STAFF = 'staff';
    case CUSTOMER = 'customer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
