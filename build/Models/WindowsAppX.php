<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppX
 */
class WindowsAppX
{
    /**
     */
    private ?string $applicableArchitectures;

    /**
     * The identity name of the uploaded app package. For example: ''Contoso.DemoApp''.
     */
    private ?string $identityName;

    /**
     * The identity publisher hash of the uploaded app package. This is the hash of the publisher from the manifest. For example: ''AB82CD0XYZ''.
     */
    private ?string $identityPublisherHash;

    /**
     * The identity resource identifier of the uploaded app package. For example: ''TestResourceId''.
     */
    private ?string $identityResourceIdentifier;

    /**
     * The identity version of the uploaded app package. For example: ''1.0.0.0''.
     */
    private ?string $identityVersion;

    /**
     * When TRUE, indicates that the app is a bundle. When FALSE, indicates that the app is not a bundle. By default, property is set to FALSE.
     */
    private ?bool $isBundle;

    /**
     * Contains properties and inherited properties for Windows AppX Line Of Business apps.
     */
    private ?string $minimumSupportedOperatingSystem;

    public function getApplicableArchitectures(): ?string
    {
        return $this->applicableArchitectures;
    }

    public function setApplicableArchitectures(?string $applicableArchitectures): self
    {
        $this->applicableArchitectures = $applicableArchitectures;
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

}
