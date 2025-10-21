<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppX
 */
class WindowsUniversalAppX
{
    /**
     */
    private ?string $applicableArchitectures;

    /**
     */
    private ?string $applicableDeviceTypes;

    /**
     * The Identity Name.
     */
    private ?string $identityName;

    /**
     * The Identity Publisher Hash.
     */
    private ?string $identityPublisherHash;

    /**
     * The Identity Resource Identifier.
     */
    private ?string $identityResourceIdentifier;

    /**
     * The identity version.
     */
    private ?string $identityVersion;

    /**
     * Whether or not the app is a bundle.
     */
    private ?bool $isBundle;

    /**
     */
    private ?string $minimumSupportedOperatingSystem;

    /**
     * Contains properties and inherited properties for Windows Universal AppX Line Of Business apps. Inherits from `mobileLobApp`.
     * @var string[]
     */
    private array $committedContainedApps = [];


    public function getApplicableArchitectures(): ?string
    {
        return $this->applicableArchitectures;
    }

    public function setApplicableArchitectures(?string $applicableArchitectures): self
    {
        $this->applicableArchitectures = $applicableArchitectures;
        return $this;
    }

    public function getApplicableDeviceTypes(): ?string
    {
        return $this->applicableDeviceTypes;
    }

    public function setApplicableDeviceTypes(?string $applicableDeviceTypes): self
    {
        $this->applicableDeviceTypes = $applicableDeviceTypes;
        return $this;
    }

    public function getIdentityName(): ?string
    {
        return $this->identityName;
    }

    public function setIdentityName(?string $identityName): self
    {
        $this->identityName = $identityName;
        return $this;
    }

    public function getIdentityPublisherHash(): ?string
    {
        return $this->identityPublisherHash;
    }

    public function setIdentityPublisherHash(?string $identityPublisherHash): self
    {
        $this->identityPublisherHash = $identityPublisherHash;
        return $this;
    }

    public function getIdentityResourceIdentifier(): ?string
    {
        return $this->identityResourceIdentifier;
    }

    public function setIdentityResourceIdentifier(?string $identityResourceIdentifier): self
    {
        $this->identityResourceIdentifier = $identityResourceIdentifier;
        return $this;
    }

    public function getIdentityVersion(): ?string
    {
        return $this->identityVersion;
    }

    public function setIdentityVersion(?string $identityVersion): self
    {
        $this->identityVersion = $identityVersion;
        return $this;
    }

    public function getIsBundle(): ?bool
    {
        return $this->isBundle;
    }

    public function setIsBundle(?bool $isBundle): self
    {
        $this->isBundle = $isBundle;
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

    /**
     * @return string[]
     */
    public function getCommittedContainedApps(): array
    {
        return $this->committedContainedApps;
    }

    /**
     * @param string[] $committedContainedApps
     */
    public function setCommittedContainedApps(array $committedContainedApps): self
    {
        $this->committedContainedApps = $committedContainedApps;
        return $this;
    }

}
