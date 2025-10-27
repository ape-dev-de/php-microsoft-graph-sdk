<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarSharingAction - Enum
 */
enum CalendarSharingAction: string
{
    case ACCEPT = 'accept';
    case ACCEPTANDVIEWCALENDAR = 'acceptAndViewCalendar';
    case VIEWCALENDAR = 'viewCalendar';
    case ADDTHISCALENDAR = 'addThisCalendar';
}
