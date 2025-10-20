<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessage
 */
class EventMessage
{
    /**
     */
    private ?string $endDateTime;

    /**
     */
    private ?bool $isAllDay;

    /**
     * True if this meeting request is accessible to a delegate, false otherwise. The default is false.
     */
    private ?bool $isDelegated;

    /**
     */
    private ?bool $isOutOfDate;

    /**
     */
    private ?string $location;

    /**
     * The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
     */
    private ?string $meetingMessageType;

    /**
     */
    private ?string $recurrence;

    /**
     */
    private ?string $startDateTime;

    /**
     */
    private ?string $type;

    /**
     * The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property. Read-only.
     */
    private ?string $event;

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getIsAllDay(): ?bool
    {
        return $this->isAllDay;
    }

    public function setIsAllDay(?bool $isAllDay): self
    {
        $this->isAllDay = $isAllDay;
        return $this;
    }

    public function getIsDelegated(): ?bool
    {
        return $this->isDelegated;
    }

    public function setIsDelegated(?bool $isDelegated): self
    {
        $this->isDelegated = $isDelegated;
        return $this;
    }

    public function getIsOutOfDate(): ?bool
    {
        return $this->isOutOfDate;
    }

    public function setIsOutOfDate(?bool $isOutOfDate): self
    {
        $this->isOutOfDate = $isOutOfDate;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getMeetingMessageType(): ?string
    {
        return $this->meetingMessageType;
    }

    public function setMeetingMessageType(?string $meetingMessageType): self
    {
        $this->meetingMessageType = $meetingMessageType;
        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(?string $event): self
    {
        $this->event = $event;
        return $this;
    }

}
