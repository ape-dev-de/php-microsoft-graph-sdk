<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordingEventMessageDetail
 */
class CallRecordingEventMessageDetail
{
    /**
     * Unique identifier of the call.
     */
    private ?string $callId;

    /**
     * Display name for the call recording.
     */
    private ?string $callRecordingDisplayName;

    /**
     * Duration of the call recording.
     */
    private ?string $callRecordingDuration;

    /**
     * Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
     */
    private ?string $callRecordingStatus;

    /**
     * Call recording URL.
     */
    private ?string $callRecordingUrl;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * Organizer of the meeting.
     */
    private ?string $meetingOrganizer;

    public function getCallId(): ?string
    {
        return $this->callId;
    }

    public function setCallId(?string $callId): self
    {
        $this->callId = $callId;
        return $this;
    }

    public function getCallRecordingDisplayName(): ?string
    {
        return $this->callRecordingDisplayName;
    }

    public function setCallRecordingDisplayName(?string $callRecordingDisplayName): self
    {
        $this->callRecordingDisplayName = $callRecordingDisplayName;
        return $this;
    }

    public function getCallRecordingDuration(): ?string
    {
        return $this->callRecordingDuration;
    }

    public function setCallRecordingDuration(?string $callRecordingDuration): self
    {
        $this->callRecordingDuration = $callRecordingDuration;
        return $this;
    }

    public function getCallRecordingStatus(): ?string
    {
        return $this->callRecordingStatus;
    }

    public function setCallRecordingStatus(?string $callRecordingStatus): self
    {
        $this->callRecordingStatus = $callRecordingStatus;
        return $this;
    }

    public function getCallRecordingUrl(): ?string
    {
        return $this->callRecordingUrl;
    }

    public function setCallRecordingUrl(?string $callRecordingUrl): self
    {
        $this->callRecordingUrl = $callRecordingUrl;
        return $this;
    }

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
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

}
