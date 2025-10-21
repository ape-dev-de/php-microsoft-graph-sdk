<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Schedule
 */
class Schedule
{
    public function __construct(
        /** Indicates whether the schedule is enabled for the team. Required. */
        public ?bool $enabled = null,
        /** Indicates whether copied shifts include activities from the original shift. */
        public ?bool $isActivitiesIncludedWhenCopyingShiftsEnabled = null,
        /** Indicates whether offer shift requests are enabled for the schedule. */
        public ?bool $offerShiftRequestsEnabled = null,
        /** Indicates whether open shifts are enabled for the schedule. */
        public ?bool $openShiftsEnabled = null,
        /** The status of the schedule provisioning. The possible values are notStarted, running, completed, failed. */
        public ?string $provisionStatus = null,
        /** Additional information about why schedule provisioning failed. */
        public ?string $provisionStatusCode = null,
        /** Indicates the start day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. */
        public ?string $startDayOfWeek = null,
        /** Indicates whether swap shifts requests are enabled for the schedule. */
        public ?bool $swapShiftsRequestsEnabled = null,
        /** Indicates whether time clock is enabled for the schedule. */
        public ?bool $timeClockEnabled = null,
        /** The time clock location settings for this schedule. */
        public ?string $timeClockSettings = null,
        /** Indicates whether time off requests are enabled for the schedule. */
        public ?bool $timeOffRequestsEnabled = null,
        /** Indicates the time zone of the schedule team using tz database format. Required. */
        public ?string $timeZone = null,
        /** @var string[] The IDs for the workforce integrations associated with this schedule. */
        public array $workforceIntegrationIds = [],
        /** The day notes in the schedule. */
        public array $dayNotes = [],
        /** The offer requests for shifts in the schedule. */
        public array $offerShiftRequests = [],
        /** The open shift requests in the schedule. */
        public array $openShiftChangeRequests = [],
        /** The set of open shifts in a scheduling group in the schedule. */
        public array $openShifts = [],
        /** The logical grouping of users in the schedule (usually by role). */
        public array $schedulingGroups = [],
        /** The shifts in the schedule. */
        public array $shifts = [],
        /** The swap requests for shifts in the schedule. */
        public array $swapShiftsChangeRequests = [],
        /** The time cards in the schedule. */
        public array $timeCards = [],
        /** The set of reasons for a time off in the schedule. */
        public array $timeOffReasons = [],
        /** The time off requests in the schedule. */
        public array $timeOffRequests = [],
        /** @var string[] The instances of times off in the schedule. */
        public array $timesOff = []
    ) {}
}
