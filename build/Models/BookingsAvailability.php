<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailability
 */
class BookingsAvailability
{
    /**
     */
    private ?string $availabilityType;

    /**
     * The hours of operation in a week. The business hours value is set to null if the availability type isn't customWeeklyHours.
     */
    private ?string $businessHours;

    public function getAvailabilityType(): ?string
    {
        return $this->availabilityType;
    }

    public function setAvailabilityType(?string $availabilityType): self
    {
        $this->availabilityType = $availabilityType;
        return $this;
    }

    public function getBusinessHours(): ?string
    {
        return $this->businessHours;
    }

    public function setBusinessHours(?string $businessHours): self
    {
        $this->businessHours = $businessHours;
        return $this;
    }

}
