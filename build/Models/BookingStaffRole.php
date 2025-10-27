<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingStaffRole - Enum
 */
enum BookingStaffRole: string
{
    case GUEST = 'guest';
    case ADMINISTRATOR = 'administrator';
    case VIEWER = 'viewer';
    case EXTERNALGUEST = 'externalGuest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case SCHEDULER = 'scheduler';
    case TEAMMEMBER = 'teamMember';
}
