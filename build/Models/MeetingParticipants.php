<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipants
 */
class MeetingParticipants
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Information about the meeting attendees.
     * @var MeetingParticipantInfo[]
     */
    public array $attendees = [];

    /** 
     * Information about the meeting organizer.
     * @var MeetingParticipantInfo|\stdClass|null
     */
    public MeetingParticipantInfo|\stdClass|null $organizer = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attendees'])) {
            $this->attendees = $data['attendees'];
        }
        if (isset($data['organizer'])) {
            $this->organizer = is_array($data['organizer']) ? new MeetingParticipantInfo($data['organizer']) : $data['organizer'];
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
