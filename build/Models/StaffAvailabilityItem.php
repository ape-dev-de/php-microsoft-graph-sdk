<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StaffAvailabilityItem
 */
class StaffAvailabilityItem
{
    /**
     * Each item in this collection indicates a slot and the status of the staff member.
     */
    private array $availabilityItems = [];

    /**
     * The ID of the staff member.
     */
    private ?string $staffId;

    public function getAvailabilityItems(): array
    {
        return $this->availabilityItems;
    }

    public function setAvailabilityItems(array $availabilityItems): self
    {
        $this->availabilityItems = $availabilityItems;
        return $this;
    }

    public function getStaffId(): ?string
    {
        return $this->staffId;
    }

    public function setStaffId(?string $staffId): self
    {
        $this->staffId = $staffId;
        return $this;
    }

}
