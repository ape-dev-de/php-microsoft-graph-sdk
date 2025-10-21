<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendanceInterval
 */
class AttendanceInterval
{
    /**
     * Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
     */
    private ?float $durationInSeconds;

    /**
     * The time the attendee joined in UTC.
     */
    private ?\DateTimeInterface $joinDateTime;

    /**
     * The time the attendee left in UTC.
     */
    private ?\DateTimeInterface $leaveDateTime;


    public function getDurationInSeconds(): ?float
    {
        return $this->durationInSeconds;
    }

    public function setDurationInSeconds(?float $durationInSeconds): self
    {
        $this->durationInSeconds = $durationInSeconds;
        return $this;
    }

    public function getJoinDateTime(): ?\DateTimeInterface
    {
        return $this->joinDateTime;
    }

    public function setJoinDateTime(?\DateTimeInterface $joinDateTime): self
    {
        $this->joinDateTime = $joinDateTime;
        return $this;
    }

    public function getLeaveDateTime(): ?\DateTimeInterface
    {
        return $this->leaveDateTime;
    }

    public function setLeaveDateTime(?\DateTimeInterface $leaveDateTime): self
    {
        $this->leaveDateTime = $leaveDateTime;
        return $this;
    }

}
