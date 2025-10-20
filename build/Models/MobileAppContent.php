<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContent
 */
class MobileAppContent
{
    /**
     * The collection of contained apps in a MobileLobApp acting as a package.
     */
    private array $containedApps = [];

    /**
     * Contains content properties for a specific app version. Each mobileAppContent can have multiple mobileAppContentFile.
     */
    private ?string $files;

    public function getContainedApps(): array
    {
        return $this->containedApps;
    }

    public function setContainedApps(array $containedApps): self
    {
        $this->containedApps = $containedApps;
        return $this;
    }

    public function getFiles(): ?string
    {
        return $this->files;
    }

    public function setFiles(?string $files): self
    {
        $this->files = $files;
        return $this;
    }

}
