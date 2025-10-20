<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessageRequest
 */
class EventMessageRequest
{
    /**
     * True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
     */
    private ?bool $allowNewTimeProposals;

    /**
     */
    private ?string $meetingRequestType;

    /**
     * If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
     */
    private ?string $previousEndDateTime;

    /**
     * If the meeting update changes the meeting location, this property specifies the previous meeting location.
     */
    private ?string $previousLocation;

    /**
     * If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
     */
    private ?string $previousStartDateTime;

    /**
     * Set to true if the sender would like the invitee to send a response to the requested meeting.
     */
    private ?string $responseRequested;

    public function getAllowNewTimeProposals(): ?bool
    {
        return $this->allowNewTimeProposals;
    }

    public function setAllowNewTimeProposals(?bool $allowNewTimeProposals): self
    {
        $this->allowNewTimeProposals = $allowNewTimeProposals;
        return $this;
    }

    public function getMeetingRequestType(): ?string
    {
        return $this->meetingRequestType;
    }

    public function setMeetingRequestType(?string $meetingRequestType): self
    {
        $this->meetingRequestType = $meetingRequestType;
        return $this;
    }

    public function getPreviousEndDateTime(): ?string
    {
        return $this->previousEndDateTime;
    }

    public function setPreviousEndDateTime(?string $previousEndDateTime): self
    {
        $this->previousEndDateTime = $previousEndDateTime;
        return $this;
    }

    public function getPreviousLocation(): ?string
    {
        return $this->previousLocation;
    }

    public function setPreviousLocation(?string $previousLocation): self
    {
        $this->previousLocation = $previousLocation;
        return $this;
    }

    public function getPreviousStartDateTime(): ?string
    {
        return $this->previousStartDateTime;
    }

    public function setPreviousStartDateTime(?string $previousStartDateTime): self
    {
        $this->previousStartDateTime = $previousStartDateTime;
        return $this;
    }

    public function getResponseRequested(): ?string
    {
        return $this->responseRequested;
    }

    public function setResponseRequested(?string $responseRequested): self
    {
        $this->responseRequested = $responseRequested;
        return $this;
    }

}
