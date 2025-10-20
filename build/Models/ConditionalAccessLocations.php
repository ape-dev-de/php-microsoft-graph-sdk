<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessLocations
 */
class ConditionalAccessLocations
{
    /**
     * Location IDs excluded from scope of policy.
     */
    private ?string $excludeLocations;

    /**
     * Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
     */
    private ?string $includeLocations;

    public function getExcludeLocations(): ?string
    {
        return $this->excludeLocations;
    }

    public function setExcludeLocations(?string $excludeLocations): self
    {
        $this->excludeLocations = $excludeLocations;
        return $this;
    }

    public function getIncludeLocations(): ?string
    {
        return $this->includeLocations;
    }

    public function setIncludeLocations(?string $includeLocations): self
    {
        $this->includeLocations = $includeLocations;
        return $this;
    }

}
