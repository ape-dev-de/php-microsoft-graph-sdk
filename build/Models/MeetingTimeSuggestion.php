<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingTimeSuggestion
 */
class MeetingTimeSuggestion
{
    public function __construct(
        /** An array that shows the availability status of each attendee for this meeting suggestion. */
        public array $attendeeAvailability = [],
        /** A percentage that represents the likelhood of all the attendees attending. */
        public ?string $confidence = null,
        /** An array that specifies the name and geographic location of each meeting location for this meeting suggestion. */
        public array $locations = [],
        /** A time period suggested for the meeting. */
        public ?TimeSlot $meetingTimeSlot = null,
        /** Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence. */
        public ?float $order = null,
        /** Availability of the meeting organizer for this meeting suggestion. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown. */
        public ?FreeBusyStatus $organizerAvailability = null,
        /** Reason for suggesting the meeting time. */
        public ?string $suggestionReason = null
    ) {}
}
