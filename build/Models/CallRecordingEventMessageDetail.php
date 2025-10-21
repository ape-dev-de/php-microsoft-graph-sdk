<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordingEventMessageDetail
 */
class CallRecordingEventMessageDetail
{
    public function __construct(
        /** Unique identifier of the call. */
        public ?string $callId = null,
        /** Display name for the call recording. */
        public ?string $callRecordingDisplayName = null,
        /** Duration of the call recording. */
        public ?string $callRecordingDuration = null,
        /** Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue. */
        public ?CallRecordingStatus $callRecordingStatus = null,
        /** Call recording URL. */
        public ?string $callRecordingUrl = null,
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null,
        /** Organizer of the meeting. */
        public ?IdentitySet $meetingOrganizer = null
    ) {}
}
