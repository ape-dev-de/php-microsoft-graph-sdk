<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidStoreApp
 */
class AndroidStoreApp
{
    /**
     * The Android app store URL.
     */
    private ?string $appStoreUrl;

    /**
     * The value for the minimum applicable operating system.
     */
    private ?string $minimumSupportedOperatingSystem;

    /**
     * Contains properties and inherited properties for Android store apps.
     */
    private ?string $packageId;

    public function getAppStoreUrl(): ?string
    {
        return $this->appStoreUrl;
    }

    public function setAppStoreUrl(?string $appStoreUrl): self
    {
        $this->appStoreUrl = $appStoreUrl;
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

    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

}
