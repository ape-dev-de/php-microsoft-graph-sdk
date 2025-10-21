<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessageRequest
 */
class EventMessageRequest
{
    public function __construct(
        /** True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true. */
        public ?bool $allowNewTimeProposals = null,
        /**  */
        public ?string $meetingRequestType = null,
        /** If the meeting update changes the meeting end time, this property specifies the previous meeting end time. */
        public ?string $previousEndDateTime = null,
        /** If the meeting update changes the meeting location, this property specifies the previous meeting location. */
        public ?string $previousLocation = null,
        /** If the meeting update changes the meeting start time, this property specifies the previous meeting start time. */
        public ?string $previousStartDateTime = null,
        /** Set to true if the sender would like the invitee to send a response to the requested meeting. */
        public ?string $responseRequested = null
    ) {}
}
