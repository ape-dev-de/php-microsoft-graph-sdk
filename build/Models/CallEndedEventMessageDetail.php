<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEndedEventMessageDetail
 */
class CallEndedEventMessageDetail
{
    public function __construct(
        /** Duration of the call. */
        public ?string $callDuration = null,
        /** Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue. */
        public ?TeamworkCallEventType $callEventType = null,
        /** Unique identifier of the call. */
        public ?string $callId = null,
        /** List of call participants. */
        public array $callParticipants = [],
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null
    ) {}
}
