<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationSchedule
 */
class SynchronizationSchedule
{
    /**
     * Date and time when this job expires. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $expiration;

    /**
     * The interval between synchronization iterations. The value is represented in ISO 8601  format for durations. For example, P1M represents a period of one month and PT1M represents a period of one minute.
     */
    private ?string $interval;

    /**
     */
    private ?string $state;


    public function getExpiration(): ?\DateTimeInterface
    {
        return $this->expiration;
    }

    public function setExpiration(?\DateTimeInterface $expiration): self
    {
        $this->expiration = $expiration;
        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->interval = $interval;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
