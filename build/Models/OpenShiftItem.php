<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShiftItem
 */
class OpenShiftItem
{
    /**
     * Count of the number of slots for the given open shift.
     */
    private ?string $openSlotCount;

    public function getOpenSlotCount(): ?string
    {
        return $this->openSlotCount;
    }

    public function setOpenSlotCount(?string $openSlotCount): self
    {
        $this->openSlotCount = $openSlotCount;
        return $this;
    }

}
