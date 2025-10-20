<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSDmgApp
 */
class MacOSDmgApp
{
    /**
     * When TRUE, indicates that the app''s version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app''s version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature. The default value is FALSE.
     */
    private ?bool $ignoreVersionDetection;

    /**
     * The list of .apps expected to be installed by the DMG (Apple Disk Image). This collection can contain a maximum of 500 elements.
     */
    private array $includedApps = [];

    /**
     * ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     */
    private ?string $minimumSupportedOperatingSystem;

    /**
     * The bundleId of the primary .app in the DMG (Apple Disk Image). This maps to the CFBundleIdentifier in the app's bundle configuration.
     */
    private ?string $primaryBundleId;

    /**
     * Contains properties and inherited properties for the MacOS DMG (Apple Disk Image) App.
     */
    private ?string $primaryBundleVersion;

    public function getIgnoreVersionDetection(): ?bool
    {
        return $this->ignoreVersionDetection;
    }

    public function setIgnoreVersionDetection(?bool $ignoreVersionDetection): self
    {
        $this->ignoreVersionDetection = $ignoreVersionDetection;
        return $this;
    }

    public function getIncludedApps(): array
    {
        return $this->includedApps;
    }

    public function setIncludedApps(array $includedApps): self
    {
        $this->includedApps = $includedApps;
        return $this;
    }

    public function getMinimumSupportedOperatingSystem(): ?string
    {
        return $this->minimumSupportedOperatingSystem;
    }

    public function setMinimumSupportedOperatingSystem(?string $minimumSupportedOperatingSystem): self
    {
        $this->minimumSupportedOperatingSystem = $minimumSupportedOperatingSystem;
        return $this;
    }

    public function getPrimaryBundleId(): ?string
    {
        return $this->primaryBundleId;
    }

    public function setPrimaryBundleId(?string $primaryBundleId): self
    {
        $this->primaryBundleId = $primaryBundleId;
        return $this;
    }

    public function getPrimaryBundleVersion(): ?string
    {
        return $this->primaryBundleVersion;
    }

    public function setPrimaryBundleVersion(?string $primaryBundleVersion): self
    {
        $this->primaryBundleVersion = $primaryBundleVersion;
        return $this;
    }

}
