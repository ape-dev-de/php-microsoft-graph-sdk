<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Presence
 */
class Presence
{
    /**
     * The supplemental information to a user''s availability. Possible values are available, away, beRightBack, busy, doNotDisturb, offline, outOfOffice, presenceUnknown.
     */
    private ?string $activity;

    /**
     * The base presence information for a user. Possible values are available, away, beRightBack, busy, doNotDisturb, focusing, inACall, inAMeeting, offline, presenting, presenceUnknown.
     */
    private ?string $availability;

    /**
     * The out of office settings for a user.
     */
    private ?string $outOfOfficeSettings;

    /**
     * The lexicographically sortable String stamp that represents the version of a presence object.
     */
    private ?string $sequenceNumber;

    /**
     * The presence status message of a user.
     */
    private ?string $statusMessage;


    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->availability = $availability;
        return $this;
    }

    public function getOutOfOfficeSettings(): ?string
    {
        return $this->outOfOfficeSettings;
    }

    public function setOutOfOfficeSettings(?string $outOfOfficeSettings): self
    {
        $this->outOfOfficeSettings = $outOfOfficeSettings;
        return $this;
    }

    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(?string $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }

    public function setStatusMessage(?string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

}
