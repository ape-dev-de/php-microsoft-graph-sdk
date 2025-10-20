<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenPage
 */
class IosHomeScreenPage
{
    /**
     * Name of the page
     */
    private ?string $displayName;

    /**
     * A page containing apps, folders, and web clips on the Home Screen.
     */
    private ?string $icons;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIcons(): ?string
    {
        return $this->icons;
    }

    public function setIcons(?string $icons): self
    {
        $this->icons = $icons;
        return $this;
    }

}
