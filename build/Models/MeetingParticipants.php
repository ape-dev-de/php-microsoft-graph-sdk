<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipants
 */
class MeetingParticipants
{
    public function __construct(
        /** Information about the meeting attendees. */
        public array $attendees = [],
        /** Information about the meeting organizer. */
        public ?MeetingParticipantInfo $organizer = null
    ) {}
}
