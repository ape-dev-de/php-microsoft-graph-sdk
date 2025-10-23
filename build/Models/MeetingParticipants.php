<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipants
 */
class MeetingParticipants
{
    /** 
     * Information about the meeting attendees.
     * @var MeetingParticipantInfo[]
     */
    public array $attendees = [];

    /** 
     * Information about the meeting organizer.
     * @var MeetingParticipantInfo|\stdClass|null
     */
    public mixed $organizer = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['attendees'])) {
            $this->attendees = $data['attendees'];
        }
        if (isset($data['organizer'])) {
            $this->organizer = $data['organizer'];
        }
    }
}
