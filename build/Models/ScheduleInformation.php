<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleInformation
 */
class ScheduleInformation
{
    public function __construct(
        /** Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free or working elswhere, 1= tentative, 2= busy, 3= out of office.Note: Working elsewhere is set to 0 instead of 4 for backward compatibility. For details, see the Q&A and Exchange 2007 and Exchange 2010 do not use the WorkingElsewhere value. */
        public ?string $availabilityView = null,
        /** Error information from attempting to get the availability of the user, distribution list, or resource. */
        public ?string $error = null,
        /** An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation. */
        public ?string $scheduleId = null,
        /** Contains the items that describe the availability of the user or resource. */
        public array $scheduleItems = [],
        /** The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings. */
        public ?string $workingHours = null
    ) {}
}
