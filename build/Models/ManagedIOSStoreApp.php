<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedIOSStoreApp
 */
class ManagedIOSStoreApp
{
    /**
     */
    private ?string $applicableDeviceType;

    /**
     * The Apple AppStoreUrl.
     */
    private ?string $appStoreUrl;

    /**
     * The app's Bundle ID.
     */
    private ?string $bundleId;

    /**
     * Contains properties and inherited properties for an iOS store app that you can manage with an Intune app protection policy.
     */
    private ?string $minimumSupportedOperatingSystem;


    public function getApplicableDeviceType(): ?string
    {
        return $this->applicableDeviceType;
    }

    public function setApplicableDeviceType(?string $applicableDeviceType): self
    {
        $this->applicableDeviceType = $applicableDeviceType;
        return $this;
    }

    public function getAppStoreUrl(): ?string
    {
        return $this->appStoreUrl;
    }

    public function setAppStoreUrl(?string $appStoreUrl): self
    {
        $this->appStoreUrl = $appStoreUrl;
        return $this;
    }

    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    public function setBundleId(?string $bundleId): self
    {
        $this->bundleId = $bundleId;
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

}
