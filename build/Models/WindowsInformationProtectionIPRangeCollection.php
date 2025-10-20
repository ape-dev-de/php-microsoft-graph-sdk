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
     */
    private ?string $ranges;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getRanges(): ?string
    {
        return $this->ranges;
    }

    public function setRanges(?string $ranges): self
    {
        $this->ranges = $ranges;
        return $this;
    }

}
