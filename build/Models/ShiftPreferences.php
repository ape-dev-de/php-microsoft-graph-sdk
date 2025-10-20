<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftPreferences
 */
class ShiftPreferences
{
    /**
     * Availability of the user to be scheduled for work and its recurrence pattern.
     */
    private ?string $availability;

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->availability = $availability;
        return $this;
    }

}
