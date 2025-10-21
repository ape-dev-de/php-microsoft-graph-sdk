<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationProgress
 */
class SynchronizationProgress
{
    /**
     * The numerator of a progress ratio; the number of units of changes already processed.
     */
    private ?float $completedUnits;

    /**
     * The time of a progress observation as an offset in minutes from UTC.
     */
    private ?\DateTimeInterface $progressObservationDateTime;

    /**
     * The denominator of a progress ratio; a number of units of changes to be processed to accomplish synchronization.
     */
    private ?float $totalUnits;

    /**
     * An optional description of the units.
     */
    private ?string $units;


    public function getCompletedUnits(): ?float
    {
        return $this->completedUnits;
    }

    public function setCompletedUnits(?float $completedUnits): self
    {
        $this->completedUnits = $completedUnits;
        return $this;
    }

    public function getProgressObservationDateTime(): ?\DateTimeInterface
    {
        return $this->progressObservationDateTime;
    }

    public function setProgressObservationDateTime(?\DateTimeInterface $progressObservationDateTime): self
    {
        $this->progressObservationDateTime = $progressObservationDateTime;
        return $this;
    }

    public function getTotalUnits(): ?float
    {
        return $this->totalUnits;
    }

    public function setTotalUnits(?float $totalUnits): self
    {
        $this->totalUnits = $totalUnits;
        return $this;
    }

    public function getUnits(): ?string
    {
        return $this->units;
    }

    public function setUnits(?string $units): self
    {
        $this->units = $units;
        return $this;
    }

}
