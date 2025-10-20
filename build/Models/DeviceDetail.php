<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceDetail
 */
class DeviceDetail
{
    /**
     * Indicates the browser information of the used in the sign-in. Populated for devices registered in Microsoft Entra.
     */
    private ?string $browser;

    /**
     * Refers to the unique ID of the device used in the sign-in. Populated for devices registered in Microsoft Entra.
     */
    private ?string $deviceId;

    /**
     * Refers to the name of the device used in the sign-in. Populated for devices registered in Microsoft Entra.
     */
    private ?string $displayName;

    /**
     * Indicates whether the device is compliant or not.
     */
    private ?bool $isCompliant;

    /**
     * Indicates if the device is managed or not.
     */
    private ?bool $isManaged;

    /**
     * Indicates the OS name and version used in the sign-in.
     */
    private ?string $operatingSystem;

    /**
     * Indicates information on whether the device used in the sign-in is workplace-joined, Microsoft Entra-joined, domain-joined.
     */
    private ?string $trustType;

    public function getBrowser(): ?string
    {
        return $this->browser;
    }

    public function setBrowser(?string $browser): self
    {
        $this->browser = $browser;
        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
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

    public function getIsCompliant(): ?bool
    {
        return $this->isCompliant;
    }

    public function setIsCompliant(?bool $isCompliant): self
    {
        $this->isCompliant = $isCompliant;
        return $this;
    }

    public function getIsManaged(): ?bool
    {
        return $this->isManaged;
    }

    public function setIsManaged(?bool $isManaged): self
    {
        $this->isManaged = $isManaged;
        return $this;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getTrustType(): ?string
    {
        return $this->trustType;
    }

    public function setTrustType(?string $trustType): self
    {
        $this->trustType = $trustType;
        return $this;
    }

}
