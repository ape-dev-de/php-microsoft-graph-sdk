<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptEventMessageDetail
 */
class CallTranscriptEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier of the call. */
    public ?string $callId = null;

    /** Unique identifier for a call transcript. */
    public ?string $callTranscriptICalUid = null;

    /** 
     * The organizer of the meeting.
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
        if (isset($data['callTranscriptICalUid'])) {
            $this->callTranscriptICalUid = $data['callTranscriptICalUid'];
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
