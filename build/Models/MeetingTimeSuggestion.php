<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingTimeSuggestion
 */
class MeetingTimeSuggestion
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * An array that shows the availability status of each attendee for this meeting suggestion.
     * @var AttendeeAvailability[]
     */
    public array $attendeeAvailability = [];

    /** A percentage that represents the likelhood of all the attendees attending. */
    public ?string $confidence = null;

    /** 
     * An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
     * @var Location[]
     */
    public array $locations = [];

    /** 
     * A time period suggested for the meeting.
     * @var TimeSlot|\stdClass|null
     */
    public mixed $meetingTimeSlot = null;

    /** Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence. */
    public ?float $order = null;

    /** 
     * Availability of the meeting organizer for this meeting suggestion. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @var FreeBusyStatus|\stdClass|null
     */
    public mixed $organizerAvailability = null;

    /** Reason for suggesting the meeting time. */
    public ?string $suggestionReason = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attendeeAvailability'])) {
            $this->attendeeAvailability = $data['attendeeAvailability'];
        }
        if (isset($data['confidence'])) {
            $this->confidence = $data['confidence'];
        }
        if (isset($data['locations'])) {
            $this->locations = $data['locations'];
        }
        if (isset($data['meetingTimeSlot'])) {
            $this->meetingTimeSlot = is_array($data['meetingTimeSlot']) ? new TimeSlot($data['meetingTimeSlot']) : $data['meetingTimeSlot'];
        }
        if (isset($data['order'])) {
            $this->order = $data['order'];
        }
        if (isset($data['organizerAvailability'])) {
            $this->organizerAvailability = is_array($data['organizerAvailability']) ? new FreeBusyStatus($data['organizerAvailability']) : $data['organizerAvailability'];
        }
        if (isset($data['suggestionReason'])) {
            $this->suggestionReason = $data['suggestionReason'];
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
