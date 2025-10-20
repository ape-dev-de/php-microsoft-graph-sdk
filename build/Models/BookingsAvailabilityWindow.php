<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailabilityWindow
 */
class BookingsAvailabilityWindow
{
    /**
     * End date of the availability window.
     */
    private ?\DateTimeInterface $endDate;

    /**
     * Start date of the availability window.
     */
    private ?\DateTimeInterface $startDate;

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

}
