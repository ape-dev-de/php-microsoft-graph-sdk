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
     * @var string[]
     */
    private array $excludeLocations = [];

    /**
     * Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
     * @var string[]
     */
    private array $includeLocations = [];


    /**
     * @return string[]
     */
    public function getExcludeLocations(): array
    {
        return $this->excludeLocations;
    }

    /**
     * @param string[] $excludeLocations
     */
    public function setExcludeLocations(array $excludeLocations): self
    {
        $this->excludeLocations = $excludeLocations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeLocations(): array
    {
        return $this->includeLocations;
    }

    /**
     * @param string[] $includeLocations
     */
    public function setIncludeLocations(array $includeLocations): self
    {
        $this->includeLocations = $includeLocations;
        return $this;
    }

}
