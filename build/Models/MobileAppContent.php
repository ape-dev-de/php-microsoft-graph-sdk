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
     * @var string[]
     */
    private array $files = [];


    public function getContainedApps(): array
    {
        return $this->containedApps;
    }

    public function setContainedApps(array $containedApps): self
    {
        $this->containedApps = $containedApps;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param string[] $files
     */
    public function setFiles(array $files): self
    {
        $this->files = $files;
        return $this;
    }

}
