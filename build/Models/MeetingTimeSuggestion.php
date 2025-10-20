<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingTimeSuggestion
 */
class MeetingTimeSuggestion
{
    /**
     * An array that shows the availability status of each attendee for this meeting suggestion.
     */
    private array $attendeeAvailability = [];

    /**
     * A percentage that represents the likelhood of all the attendees attending.
     */
    private ?string $confidence;

    /**
     * An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
     */
    private array $locations = [];

    /**
     * A time period suggested for the meeting.
     */
    private ?string $meetingTimeSlot;

    /**
     * Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
     */
    private ?float $order;

    /**
     * Availability of the meeting organizer for this meeting suggestion. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     */
    private ?string $organizerAvailability;

    /**
     * Reason for suggesting the meeting time.
     */
    private ?string $suggestionReason;

    public function getAttendeeAvailability(): array
    {
        return $this->attendeeAvailability;
    }

    public function setAttendeeAvailability(array $attendeeAvailability): self
    {
        $this->attendeeAvailability = $attendeeAvailability;
        return $this;
    }

    public function getConfidence(): ?string
    {
        return $this->confidence;
    }

    public function setConfidence(?string $confidence): self
    {
        $this->confidence = $confidence;
        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setLocations(array $locations): self
    {
        $this->locations = $locations;
        return $this;
    }

    public function getMeetingTimeSlot(): ?string
    {
        return $this->meetingTimeSlot;
    }

    public function setMeetingTimeSlot(?string $meetingTimeSlot): self
    {
        $this->meetingTimeSlot = $meetingTimeSlot;
        return $this;
    }

    public function getOrder(): ?float
    {
        return $this->order;
    }

    public function setOrder(?float $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getOrganizerAvailability(): ?string
    {
        return $this->organizerAvailability;
    }

    public function setOrganizerAvailability(?string $organizerAvailability): self
    {
        $this->organizerAvailability = $organizerAvailability;
        return $this;
    }

    public function getSuggestionReason(): ?string
    {
        return $this->suggestionReason;
    }

    public function setSuggestionReason(?string $suggestionReason): self
    {
        $this->suggestionReason = $suggestionReason;
        return $this;
    }

}
