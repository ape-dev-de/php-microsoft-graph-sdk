<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Reminder
 */
class Reminder
{
    /**
     * Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
     */
    private ?string $changeKey;

    /**
     * The date, time and time zone that the event ends.
     */
    private ?string $eventEndTime;

    /**
     * The unique ID of the event. Read only.
     */
    private ?string $eventId;

    /**
     * The location of the event.
     */
    private ?string $eventLocation;

    /**
     * The date, time, and time zone that the event starts.
     */
    private ?string $eventStartTime;

    /**
     * The text of the event's subject line.
     */
    private ?string $eventSubject;

    /**
     * The URL to open the event in Outlook on the web.The event opens in the browser if you're logged in to your mailbox via Outlook on the web. You're prompted to log in if you aren't already logged in with the browser.This URL can't be accessed from within an iFrame.
     */
    private ?string $eventWebLink;

    /**
     * The date, time, and time zone that the reminder is set to occur.
     */
    private ?string $reminderFireTime;

    public function getChangeKey(): ?string
    {
        return $this->changeKey;
    }

    public function setChangeKey(?string $changeKey): self
    {
        $this->changeKey = $changeKey;
        return $this;
    }

    public function getEventEndTime(): ?string
    {
        return $this->eventEndTime;
    }

    public function setEventEndTime(?string $eventEndTime): self
    {
        $this->eventEndTime = $eventEndTime;
        return $this;
    }

    public function getEventId(): ?string
    {
        return $this->eventId;
    }

    public function setEventId(?string $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }

    public function getEventLocation(): ?string
    {
        return $this->eventLocation;
    }

    public function setEventLocation(?string $eventLocation): self
    {
        $this->eventLocation = $eventLocation;
        return $this;
    }

    public function getEventStartTime(): ?string
    {
        return $this->eventStartTime;
    }

    public function setEventStartTime(?string $eventStartTime): self
    {
        $this->eventStartTime = $eventStartTime;
        return $this;
    }

    public function getEventSubject(): ?string
    {
        return $this->eventSubject;
    }

    public function setEventSubject(?string $eventSubject): self
    {
        $this->eventSubject = $eventSubject;
        return $this;
    }

    public function getEventWebLink(): ?string
    {
        return $this->eventWebLink;
    }

    public function setEventWebLink(?string $eventWebLink): self
    {
        $this->eventWebLink = $eventWebLink;
        return $this;
    }

    public function getReminderFireTime(): ?string
    {
        return $this->reminderFireTime;
    }

    public function setReminderFireTime(?string $reminderFireTime): self
    {
        $this->reminderFireTime = $reminderFireTime;
        return $this;
    }

}
