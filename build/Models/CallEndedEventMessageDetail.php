<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEndedEventMessageDetail
 */
class CallEndedEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Duration of the call. */
    public ?string $callDuration = null;

    /** 
     * Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     * @var TeamworkCallEventType|\stdClass|null
     */
    public TeamworkCallEventType|\stdClass|null $callEventType = null;

    /** Unique identifier of the call. */
    public ?string $callId = null;

    /** 
     * List of call participants.
     * @var CallParticipantInfo[]
     */
    public array $callParticipants = [];

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $initiator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['callDuration'])) {
            $this->callDuration = $data['callDuration'];
        }
        if (isset($data['callEventType'])) {
            $this->callEventType = is_string($data['callEventType']) ? TeamworkCallEventType::tryFrom($data['callEventType']) : $data['callEventType'];
        }
        if (isset($data['callId'])) {
            $this->callId = $data['callId'];
        }
        if (isset($data['callParticipants'])) {
            $this->callParticipants = $data['callParticipants'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
