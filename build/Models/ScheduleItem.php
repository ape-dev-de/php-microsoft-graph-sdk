<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleItem
 */
class ScheduleItem
{
    public function __construct(
        /** The date, time, and time zone that the corresponding event ends. */
        public ?DateTimeTimeZone $end = null,
        /** The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional. */
        public ?bool $isPrivate = null,
        /** The location where the corresponding event is held or attended from. Optional. */
        public ?string $location = null,
        /** The date, time, and time zone that the corresponding event starts. */
        public ?DateTimeTimeZone $start = null,
        /** The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown. */
        public ?FreeBusyStatus $status = null,
        /** The corresponding event's subject line. Optional. */
        public ?string $subject = null
    ) {}
}
