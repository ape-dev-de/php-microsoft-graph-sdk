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
     */
    private array $attendees = [];

    /**
     * Information about the meeting organizer.
     */
    private ?string $organizer;

    public function getAttendees(): array
    {
        return $this->attendees;
    }

    public function setAttendees(array $attendees): self
    {
        $this->attendees = $attendees;
        return $this;
    }

    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }

    public function setOrganizer(?string $organizer): self
    {
        $this->organizer = $organizer;
        return $this;
    }

}
