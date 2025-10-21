<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobApp
 */
class IosLobApp
{
    /**
     */
    private ?string $applicableDeviceType;

    /**
     * The build number of iOS Line of Business (LoB) app.
     */
    private ?string $buildNumber;

    /**
     * The Identity Name.
     */
    private ?string $bundleId;

    /**
     * The expiration time.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * The value for the minimum applicable operating system.
     */
    private ?string $minimumSupportedOperatingSystem;

    /**
     * Contains properties and inherited properties for iOS Line Of Business apps.
     */
    private ?string $versionNumber;


    public function getApplicableDeviceType(): ?string
    {
        return $this->applicableDeviceType;
    }

    public function setApplicableDeviceType(?string $applicableDeviceType): self
    {
        $this->applicableDeviceType = $applicableDeviceType;
        return $this;
    }

    public function getBuildNumber(): ?string
    {
        return $this->buildNumber;
    }

    public function setBuildNumber(?string $buildNumber): self
    {
        $this->buildNumber = $buildNumber;
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

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
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

    public function getVersionNumber(): ?string
    {
        return $this->versionNumber;
    }

    public function setVersionNumber(?string $versionNumber): self
    {
        $this->versionNumber = $versionNumber;
        return $this;
    }

}
