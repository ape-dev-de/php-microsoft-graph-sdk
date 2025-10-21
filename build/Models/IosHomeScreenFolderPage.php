<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolderPage
 */
class IosHomeScreenFolderPage
{
    /**
     * A list of apps and web clips to appear on a page within a folder. This collection can contain a maximum of 500 elements.
     */
    private array $apps = [];

    /**
     * A page for a folder containing apps and web clips on the Home Screen.
     */
    private ?string $displayName;


    public function getApps(): array
    {
        return $this->apps;
    }

    public function setApps(array $apps): self
    {
        $this->apps = $apps;
        return $this;
    }

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
