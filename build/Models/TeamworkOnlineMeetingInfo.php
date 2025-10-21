<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkOnlineMeetingInfo
 */
class TeamworkOnlineMeetingInfo
{
    /**
     * The identifier of the calendar event associated with the meeting.
     */
    private ?string $calendarEventId;

    /**
     * The URL that users click to join or uniquely identify the meeting.
     */
    private ?string $joinWebUrl;

    /**
     * The organizer of the meeting.
     */
    private ?string $organizer;


    public function getCalendarEventId(): ?string
    {
        return $this->calendarEventId;
    }

    public function setCalendarEventId(?string $calendarEventId): self
    {
        $this->calendarEventId = $calendarEventId;
        return $this;
    }

    public function getJoinWebUrl(): ?string
    {
        return $this->joinWebUrl;
    }

    public function setJoinWebUrl(?string $joinWebUrl): self
    {
        $this->joinWebUrl = $joinWebUrl;
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
