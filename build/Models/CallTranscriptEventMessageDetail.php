<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptEventMessageDetail
 */
class CallTranscriptEventMessageDetail
{
    public function __construct(
        /** Unique identifier of the call. */
        public ?string $callId = null,
        /** Unique identifier for a call transcript. */
        public ?string $callTranscriptICalUid = null,
        /** The organizer of the meeting. */
        public ?IdentitySet $meetingOrganizer = null
    ) {}
}
