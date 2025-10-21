<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffRequest
 */
class TimeOffRequest
{
    /**
     * The date and time the time off ends in ISO 8601 format and in UTC time.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The date and time the time off starts in ISO 8601 format and in UTC time.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The reason for the time off.
     */
    private ?string $timeOffReasonId;


    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
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

    public function getTimeOffReasonId(): ?string
    {
        return $this->timeOffReasonId;
    }

    public function setTimeOffReasonId(?string $timeOffReasonId): self
    {
        $this->timeOffReasonId = $timeOffReasonId;
        return $this;
    }

}
