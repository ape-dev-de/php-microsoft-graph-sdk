<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DetectedApp
 */
class DetectedApp
{
    /**
     * The number of devices that have installed this application
     */
    private ?float $deviceCount;

    /**
     * Name of the discovered application. Read-only
     */
    private ?string $displayName;

    /**
     */
    private ?string $platform;

    /**
     * Indicates the publisher of the discovered application. For example: ''Microsoft''.  The default value is an empty string.
     */
    private ?string $publisher;

    /**
     * Discovered application size in bytes. Read-only
     */
    private ?float $sizeInByte;

    /**
     * Version of the discovered application. Read-only
     */
    private ?string $version;

    /**
     * A managed or unmanaged app that is installed on a managed device. Unmanaged apps will only appear for devices marked as corporate owned.
     * @var string[]
     */
    private array $managedDevices = [];


    public function getDeviceCount(): ?float
    {
        return $this->deviceCount;
    }

    public function setDeviceCount(?float $deviceCount): self
    {
        $this->deviceCount = $deviceCount;
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

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getSizeInByte(): ?float
    {
        return $this->sizeInByte;
    }

    public function setSizeInByte(?float $sizeInByte): self
    {
        $this->sizeInByte = $sizeInByte;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getManagedDevices(): array
    {
        return $this->managedDevices;
    }

    /**
     * @param string[] $managedDevices
     */
    public function setManagedDevices(array $managedDevices): self
    {
        $this->managedDevices = $managedDevices;
        return $this;
    }

}
