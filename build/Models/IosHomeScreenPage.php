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
     * @var string[]
     */
    private array $icons = [];


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
    public function getIcons(): array
    {
        return $this->icons;
    }

    /**
     * @param string[] $icons
     */
    public function setIcons(array $icons): self
    {
        $this->icons = $icons;
        return $this;
    }

}
