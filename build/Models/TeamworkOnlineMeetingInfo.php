<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkOnlineMeetingInfo
 */
class TeamworkOnlineMeetingInfo
{
    /** The identifier of the calendar event associated with the meeting. */
    public ?string $calendarEventId = null;

    /** The URL that users click to join or uniquely identify the meeting. */
    public ?string $joinWebUrl = null;

    /** 
     * The organizer of the meeting.
     * @var TeamworkUserIdentity|\stdClass|null
     */
    public mixed $organizer = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['calendarEventId'])) {
            $this->calendarEventId = $data['calendarEventId'];
        }
        if (isset($data['joinWebUrl'])) {
            $this->joinWebUrl = $data['joinWebUrl'];
        }
        if (isset($data['organizer'])) {
            $this->organizer = $data['organizer'];
        }
    }
}
