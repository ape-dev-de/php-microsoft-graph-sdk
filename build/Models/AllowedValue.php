<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AllowedValue
 */
class AllowedValue
{
    /**
     * Indicates whether the predefined value is active or deactivated. If set to false, this predefined value can''t be assigned to any other supported directory objects.
     */
    private ?string $isActive;

    public function getIsActive(): ?string
    {
        return $this->isActive;
    }

    public function setIsActive(?string $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

}
