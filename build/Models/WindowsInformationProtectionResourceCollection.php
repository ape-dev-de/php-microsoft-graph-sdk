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
     * @var string[]
     */
    private array $resources = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * @param string[] $resources
     */
    public function setResources(array $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

}
