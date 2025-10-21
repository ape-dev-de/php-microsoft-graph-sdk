<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidLobApp
 */
class AndroidLobApp
{
    /**
     * The value for the minimum applicable operating system.
     */
    private ?string $minimumSupportedOperatingSystem;

    /**
     * The package identifier.
     */
    private ?string $packageId;

    /**
     * The version code of Android Line of Business (LoB) app.
     */
    private ?string $versionCode;

    /**
     * Contains properties and inherited properties for Android Line Of Business apps.
     */
    private ?string $versionName;


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

    public function getVersionCode(): ?string
    {
        return $this->versionCode;
    }

    public function setVersionCode(?string $versionCode): self
    {
        $this->versionCode = $versionCode;
        return $this;
    }

    public function getVersionName(): ?string
    {
        return $this->versionName;
    }

    public function setVersionName(?string $versionName): self
    {
        $this->versionName = $versionName;
        return $this;
    }

}
