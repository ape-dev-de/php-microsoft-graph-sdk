<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeeting
 */
class OnlineMeeting
{
    /**
     * The content stream of the attendee report of a Microsoft Teams live event. Read-only.
     */
    private ?string $attendeeReport;

    /**
     * Settings related to a live event.
     */
    private ?string $broadcastSettings;

    /**
     * The meeting creation time in UTC. Read-only.
     */
    private ?\DateTimeInterface $creationDateTime;

    /**
     * The meeting end time in UTC. Required when you create an online meeting.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The external ID that is a custom identifier. Optional.
     */
    private ?string $externalId;

    /**
     * Indicates whether this meeting is a Teams live event.
     */
    private ?bool $isBroadcast;

    /**
     * The ID of the meeting template.
     */
    private ?string $meetingTemplateId;

    /**
     * The participants associated with the online meeting, including the organizer and the attendees.
     */
    private ?string $participants;

    /**
     * The meeting start time in UTC.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The recordings of an online meeting. Read-only.
     */
    private array $recordings = [];

    /**
     * The transcripts of an online meeting. Read-only.
     * @var string[]
     */
    private array $transcripts = [];


    public function getAttendeeReport(): ?string
    {
        return $this->attendeeReport;
    }

    public function setAttendeeReport(?string $attendeeReport): self
    {
        $this->attendeeReport = $attendeeReport;
        return $this;
    }

    public function getBroadcastSettings(): ?string
    {
        return $this->broadcastSettings;
    }

    public function setBroadcastSettings(?string $broadcastSettings): self
    {
        $this->broadcastSettings = $broadcastSettings;
        return $this;
    }

    public function getCreationDateTime(): ?\DateTimeInterface
    {
        return $this->creationDateTime;
    }

    public function setCreationDateTime(?\DateTimeInterface $creationDateTime): self
    {
        $this->creationDateTime = $creationDateTime;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getIsBroadcast(): ?bool
    {
        return $this->isBroadcast;
    }

    public function setIsBroadcast(?bool $isBroadcast): self
    {
        $this->isBroadcast = $isBroadcast;
        return $this;
    }

    public function getMeetingTemplateId(): ?string
    {
        return $this->meetingTemplateId;
    }

    public function setMeetingTemplateId(?string $meetingTemplateId): self
    {
        $this->meetingTemplateId = $meetingTemplateId;
        return $this;
    }

    public function getParticipants(): ?string
    {
        return $this->participants;
    }

    public function setParticipants(?string $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getRecordings(): array
    {
        return $this->recordings;
    }

    public function setRecordings(array $recordings): self
    {
        $this->recordings = $recordings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTranscripts(): array
    {
        return $this->transcripts;
    }

    /**
     * @param string[] $transcripts
     */
    public function setTranscripts(array $transcripts): self
    {
        $this->transcripts = $transcripts;
        return $this;
    }

}
