<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptorBase
 */
class SecurityFilePlanDescriptorBase
{
    /**
     * Unique string that defines the name for the file plan descriptor associated with a particular retention label.
     */
    private ?string $displayName;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
