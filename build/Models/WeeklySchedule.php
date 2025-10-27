<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WeeklySchedule - Enum
 * Possible values for a weekly schedule.
 */
enum WeeklySchedule: string
{
    case USERDEFINED = 'userDefined';
    case EVERYDAY = 'everyday';
    case SUNDAY = 'sunday';
    case MONDAY = 'monday';
    case TUESDAY = 'tuesday';
    case WEDNESDAY = 'wednesday';
    case THURSDAY = 'thursday';
    case FRIDAY = 'friday';
    case SATURDAY = 'saturday';
}
