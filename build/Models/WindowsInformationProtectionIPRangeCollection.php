<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionIPRangeCollection
 */
class WindowsInformationProtectionIPRangeCollection
{
    /**
     * Display name
     */
    private ?string $displayName;

    /**
     * Windows Information Protection IP Range Collection
     * @var string[]
     */
    private array $ranges = [];


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
    public function getRanges(): array
    {
        return $this->ranges;
    }

    /**
     * @param string[] $ranges
     */
    public function setRanges(array $ranges): self
    {
        $this->ranges = $ranges;
        return $this;
    }

}
