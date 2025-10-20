<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeClockSettings
 */
class TimeClockSettings
{
    /**
     * The approved location of the timeClock.
     */
    private ?string $approvedLocation;

    public function getApprovedLocation(): ?string
    {
        return $this->approvedLocation;
    }

    public function setApprovedLocation(?string $approvedLocation): self
    {
        $this->approvedLocation = $approvedLocation;
        return $this;
    }

}
