<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordingEventMessageDetail
 */
class CallRecordingEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier of the call. */
    public ?string $callId = null;

    /** Display name for the call recording. */
    public ?string $callRecordingDisplayName = null;

    /** Duration of the call recording. */
    public ?string $callRecordingDuration = null;

    /** 
     * Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
     * @var CallRecordingStatus|\stdClass|null
     */
    public mixed $callRecordingStatus = null;

    /** Call recording URL. */
    public ?string $callRecordingUrl = null;

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** 
     * Organizer of the meeting.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $meetingOrganizer = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['callId'])) {
            $this->callId = $data['callId'];
        }
        if (isset($data['callRecordingDisplayName'])) {
            $this->callRecordingDisplayName = $data['callRecordingDisplayName'];
        }
        if (isset($data['callRecordingDuration'])) {
            $this->callRecordingDuration = $data['callRecordingDuration'];
        }
        if (isset($data['callRecordingStatus'])) {
            $this->callRecordingStatus = is_array($data['callRecordingStatus']) ? new CallRecordingStatus($data['callRecordingStatus']) : $data['callRecordingStatus'];
        }
        if (isset($data['callRecordingUrl'])) {
            $this->callRecordingUrl = $data['callRecordingUrl'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['meetingOrganizer'])) {
            $this->meetingOrganizer = is_array($data['meetingOrganizer']) ? new IdentitySet($data['meetingOrganizer']) : $data['meetingOrganizer'];
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
