<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscript
 */
class CallTranscript
{
    /**
     * The unique identifier for the call that is related to this transcript. Read-only.
     */
    private ?string $callId;

    /**
     * The content of the transcript. Read-only.
     */
    private ?string $content;

    /**
     * The unique identifier that links the transcript with its corresponding recording. Read-only.
     */
    private ?string $contentCorrelationId;

    /**
     * Date and time at which the transcript was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Date and time at which the transcription ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The unique identifier of the online meeting related to this transcript. Read-only.
     */
    private ?string $meetingId;

    /**
     * The identity information of the organizer of the onlineMeeting related to this transcript. Read-only.
     */
    private ?string $meetingOrganizer;

    /**
     * The time-aligned metadata of the utterances in the transcript. Read-only.
     */
    private ?string $metadataContent;

    /**
     * The URL that can be used to access the content of the transcript. Read-only.
     */
    private ?string $transcriptContentUrl;

    public function getCallId(): ?string
    {
        return $this->callId;
    }

    public function setCallId(?string $callId): self
    {
        $this->callId = $callId;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getContentCorrelationId(): ?string
    {
        return $this->contentCorrelationId;
    }

    public function setContentCorrelationId(?string $contentCorrelationId): self
    {
        $this->contentCorrelationId = $contentCorrelationId;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getMeetingId(): ?string
    {
        return $this->meetingId;
    }

    public function setMeetingId(?string $meetingId): self
    {
        $this->meetingId = $meetingId;
        return $this;
    }

    public function getMeetingOrganizer(): ?string
    {
        return $this->meetingOrganizer;
    }

    public function setMeetingOrganizer(?string $meetingOrganizer): self
    {
        $this->meetingOrganizer = $meetingOrganizer;
        return $this;
    }

    public function getMetadataContent(): ?string
    {
        return $this->metadataContent;
    }

    public function setMetadataContent(?string $metadataContent): self
    {
        $this->metadataContent = $metadataContent;
        return $this;
    }

    public function getTranscriptContentUrl(): ?string
    {
        return $this->transcriptContentUrl;
    }

    public function setTranscriptContentUrl(?string $transcriptContentUrl): self
    {
        $this->transcriptContentUrl = $transcriptContentUrl;
        return $this;
    }

}
