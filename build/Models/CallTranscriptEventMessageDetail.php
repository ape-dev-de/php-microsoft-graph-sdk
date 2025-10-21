<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptEventMessageDetail
 */
class CallTranscriptEventMessageDetail
{
    /**
     * Unique identifier of the call.
     */
    private ?string $callId;

    /**
     * Unique identifier for a call transcript.
     */
    private ?string $callTranscriptICalUid;

    /**
     * The organizer of the meeting.
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

    public function getCallTranscriptICalUid(): ?string
    {
        return $this->callTranscriptICalUid;
    }

    public function setCallTranscriptICalUid(?string $callTranscriptICalUid): self
    {
        $this->callTranscriptICalUid = $callTranscriptICalUid;
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
