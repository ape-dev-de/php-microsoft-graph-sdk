<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenItem
 */
class IosHomeScreenItem
{
    /**
     * Represents an item on the iOS Home Screen
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
