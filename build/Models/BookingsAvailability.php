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
     * @var string[]
     */
    private array $businessHours = [];


    public function getAvailabilityType(): ?string
    {
        return $this->availabilityType;
    }

    public function setAvailabilityType(?string $availabilityType): self
    {
        $this->availabilityType = $availabilityType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBusinessHours(): array
    {
        return $this->businessHours;
    }

    /**
     * @param string[] $businessHours
     */
    public function setBusinessHours(array $businessHours): self
    {
        $this->businessHours = $businessHours;
        return $this;
    }

}
