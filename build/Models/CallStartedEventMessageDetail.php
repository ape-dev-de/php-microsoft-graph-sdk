<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallStartedEventMessageDetail
 */
class CallStartedEventMessageDetail
{
    /** 
     * Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     * @var TeamworkCallEventType|\stdClass|null
     */
    public mixed $callEventType = null;

    /** Unique identifier of the call. */
    public ?string $callId = null;

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['callEventType'])) {
            $this->callEventType = $data['callEventType'];
        }
        if (isset($data['callId'])) {
            $this->callId = $data['callId'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
    }
}
