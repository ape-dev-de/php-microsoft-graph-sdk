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
     * @var string[]
     */
    private array $availability = [];


    /**
     * @return string[]
     */
    public function getAvailability(): array
    {
        return $this->availability;
    }

    /**
     * @param string[] $availability
     */
    public function setAvailability(array $availability): self
    {
        $this->availability = $availability;
        return $this;
    }

}
