<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceMetadata
 */
class DeviceMetadata
{
    /**
     * Optional. The general type of the device (for example, ''Managed'', ''Unmanaged'').
     */
    private ?string $deviceType;

    /**
     * The Internet Protocol (IP) address of the device.
     */
    private ?string $ipAddress;

    /**
     * Details about the operating system platform and version.
     */
    private ?string $operatingSystemSpecifications;

    public function getDeviceType(): ?string
    {
        return $this->deviceType;
    }

    public function setDeviceType(?string $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getOperatingSystemSpecifications(): ?string
    {
        return $this->operatingSystemSpecifications;
    }

    public function setOperatingSystemSpecifications(?string $operatingSystemSpecifications): self
    {
        $this->operatingSystemSpecifications = $operatingSystemSpecifications;
        return $this;
    }

}
