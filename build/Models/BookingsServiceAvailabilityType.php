<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsServiceAvailabilityType - Enum
 */
enum BookingsServiceAvailabilityType: string
{
    case BOOKWHENSTAFFAREFREE = 'bookWhenStaffAreFree';
    case NOTBOOKABLE = 'notBookable';
    case CUSTOMWEEKLYHOURS = 'customWeeklyHours';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
