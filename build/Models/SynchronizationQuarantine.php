<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationQuarantine
 */
class SynchronizationQuarantine
{
    /**
     * Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $currentBegan;

    /**
     * Describes the error(s) that occurred when putting the synchronization job into quarantine.
     */
    private ?string $error;

    /**
     * Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $nextAttempt;

    /**
     */
    private ?string $reason;

    /**
     * Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $seriesBegan;

    /**
     * Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
     */
    private ?string $seriesCount;

    public function getCurrentBegan(): ?\DateTimeInterface
    {
        return $this->currentBegan;
    }

    public function setCurrentBegan(?\DateTimeInterface $currentBegan): self
    {
        $this->currentBegan = $currentBegan;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getNextAttempt(): ?\DateTimeInterface
    {
        return $this->nextAttempt;
    }

    public function setNextAttempt(?\DateTimeInterface $nextAttempt): self
    {
        $this->nextAttempt = $nextAttempt;
        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function getSeriesBegan(): ?\DateTimeInterface
    {
        return $this->seriesBegan;
    }

    public function setSeriesBegan(?\DateTimeInterface $seriesBegan): self
    {
        $this->seriesBegan = $seriesBegan;
        return $this;
    }

    public function getSeriesCount(): ?string
    {
        return $this->seriesCount;
    }

    public function setSeriesCount(?string $seriesCount): self
    {
        $this->seriesCount = $seriesCount;
        return $this;
    }

}
