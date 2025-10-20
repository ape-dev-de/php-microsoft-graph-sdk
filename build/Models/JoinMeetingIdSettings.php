<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * JoinMeetingIdSettings
 */
class JoinMeetingIdSettings
{
    /**
     * Indicates whether a passcode is required to join a meeting when using joinMeetingId. Optional.
     */
    private ?bool $isPasscodeRequired;

    /**
     * The meeting ID to be used to join a meeting. Optional. Read-only.
     */
    private ?string $joinMeetingId;

    /**
     * The passcode to join a meeting.  Optional. Read-only.
     */
    private ?string $passcode;

    public function getIsPasscodeRequired(): ?bool
    {
        return $this->isPasscodeRequired;
    }

    public function setIsPasscodeRequired(?bool $isPasscodeRequired): self
    {
        $this->isPasscodeRequired = $isPasscodeRequired;
        return $this;
    }

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
