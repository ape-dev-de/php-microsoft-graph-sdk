<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdMeetingInfo
 */
class JoinMeetingIdMeetingInfo
{
    /**
     * The ID used to join the meeting.
     */
    private ?string $joinMeetingId;

    /**
     * The passcode used to join the meeting. Optional.
     */
    private ?string $passcode;


    public function getJoinMeetingId(): ?string
    {
        return $this->joinMeetingId;
    }

    public function setJoinMeetingId(?string $joinMeetingId): self
    {
        $this->joinMeetingId = $joinMeetingId;
        return $this;
    }

    public function getPasscode(): ?string
    {
        return $this->passcode;
    }

    public function setPasscode(?string $passcode): self
    {
        $this->passcode = $passcode;
        return $this;
    }

}
