<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallStartedEventMessageDetail
 */
class CallStartedEventMessageDetail
{
    public function __construct(
        /** Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue. */
        public ?TeamworkCallEventType $callEventType = null,
        /** Unique identifier of the call. */
        public ?string $callId = null,
        /** Initiator of the event. */
        public ?IdentitySet $initiator = null
    ) {}
}
