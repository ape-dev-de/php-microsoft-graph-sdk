<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkOnlineMeetingInfo
 */
class TeamworkOnlineMeetingInfo
{
    public function __construct(
        /** The identifier of the calendar event associated with the meeting. */
        public ?string $calendarEventId = null,
        /** The URL that users click to join or uniquely identify the meeting. */
        public ?string $joinWebUrl = null,
        /** The organizer of the meeting. */
        public ?TeamworkUserIdentity $organizer = null
    ) {}
}
