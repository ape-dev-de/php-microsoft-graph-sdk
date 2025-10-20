<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionResourceCollection
 */
class WindowsInformationProtectionResourceCollection
{
    /**
     * Display name
     */
    private ?string $displayName;

    /**
     * Windows Information Protection Resource Collection
     */
    private ?string $resources;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getResources(): ?string
    {
        return $this->resources;
    }

    public function setResources(?string $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

}
