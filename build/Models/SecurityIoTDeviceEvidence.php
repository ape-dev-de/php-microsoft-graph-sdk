<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIoTDeviceEvidence
 */
class SecurityIoTDeviceEvidence
{
    /**
     * The device ID.
     */
    private ?string $deviceId;

    /**
     * The friendly name of the device.
     */
    private ?string $deviceName;

    /**
     * The URL to the device page in the IoT Defender portal.
     */
    private ?string $devicePageLink;

    /**
     * The device subtype.
     */
    private ?string $deviceSubType;

    /**
     * The type of the device. For example, ''temperature sensor,'' ''freezer,'' ''wind turbine,'' and so on.
     */
    private ?string $deviceType;

    /**
     * The importance level for the IoT device. Possible values are low, normal, high, and unknownFutureValue.
     */
    private ?string $importance;

    /**
     * The azureResourceEvidence entity that represents the IoT Hub that the device belongs to.
     */
    private ?string $ioTHub;

    /**
     * The ID of the Azure Security Center for the IoT agent that is running on the device.
     */
    private ?string $ioTSecurityAgentId;

    /**
     * The current IP address of the device.
     */
    private ?string $ipAddress;

    /**
     * Indicates whether the device classified as an authorized device.
     */
    private ?bool $isAuthorized;

    /**
     * Indicates whether the device classified as a programming device.
     */
    private ?bool $isProgramming;

    /**
     * Indicates whether the device classified as a scanner.
     */
    private ?bool $isScanner;

    /**
     * The MAC address of the device.
     */
    private ?string $macAddress;

    /**
     * The manufacturer of the device.
     */
    private ?string $manufacturer;

    /**
     * The model of the device.
     */
    private ?string $model;

    /**
     * The current network interface controllers on the device.
     */
    private array $nics = [];

    /**
     * The operating system the device is running.
     */
    private ?string $operatingSystem;

    /**
     * The owners for the device.
     */
    private ?string $owners;

    /**
     * The list of protocols that the device supports.
     */
    private ?string $protocols;

    /**
     * The Purdue Layer of the device.
     */
    private ?string $purdueLayer;

    /**
     * The sensor that monitors the device.
     */
    private ?string $sensor;

    /**
     * The serial number of the device.
     */
    private ?string $serialNumber;

    /**
     * The site location of the device.
     */
    private ?string $site;

    /**
     * The source (microsoft/vendor) of the device entity.
     */
    private ?string $source;

    /**
     * A URL reference to the source item where the device is managed.
     */
    private ?string $sourceRef;

    /**
     * The zone location of the device within a site.
     */
    private ?string $zone;

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getDevicePageLink(): ?string
    {
        return $this->devicePageLink;
    }

    public function setDevicePageLink(?string $devicePageLink): self
    {
        $this->devicePageLink = $devicePageLink;
        return $this;
    }

    public function getDeviceSubType(): ?string
    {
        return $this->deviceSubType;
    }

    public function setDeviceSubType(?string $deviceSubType): self
    {
        $this->deviceSubType = $deviceSubType;
        return $this;
    }

    public function getDeviceType(): ?string
    {
        return $this->deviceType;
    }

    public function setDeviceType(?string $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(?string $importance): self
    {
        $this->importance = $importance;
        return $this;
    }

    public function getIoTHub(): ?string
    {
        return $this->ioTHub;
    }

    public function setIoTHub(?string $ioTHub): self
    {
        $this->ioTHub = $ioTHub;
        return $this;
    }

    public function getIoTSecurityAgentId(): ?string
    {
        return $this->ioTSecurityAgentId;
    }

    public function setIoTSecurityAgentId(?string $ioTSecurityAgentId): self
    {
        $this->ioTSecurityAgentId = $ioTSecurityAgentId;
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

    public function getIsAuthorized(): ?bool
    {
        return $this->isAuthorized;
    }

    public function setIsAuthorized(?bool $isAuthorized): self
    {
        $this->isAuthorized = $isAuthorized;
        return $this;
    }

    public function getIsProgramming(): ?bool
    {
        return $this->isProgramming;
    }

    public function setIsProgramming(?bool $isProgramming): self
    {
        $this->isProgramming = $isProgramming;
        return $this;
    }

    public function getIsScanner(): ?bool
    {
        return $this->isScanner;
    }

    public function setIsScanner(?bool $isScanner): self
    {
        $this->isScanner = $isScanner;
        return $this;
    }

    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    public function setMacAddress(?string $macAddress): self
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getNics(): array
    {
        return $this->nics;
    }

    public function setNics(array $nics): self
    {
        $this->nics = $nics;
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

    public function getOwners(): ?string
    {
        return $this->owners;
    }

    public function setOwners(?string $owners): self
    {
        $this->owners = $owners;
        return $this;
    }

    public function getProtocols(): ?string
    {
        return $this->protocols;
    }

    public function setProtocols(?string $protocols): self
    {
        $this->protocols = $protocols;
        return $this;
    }

    public function getPurdueLayer(): ?string
    {
        return $this->purdueLayer;
    }

    public function setPurdueLayer(?string $purdueLayer): self
    {
        $this->purdueLayer = $purdueLayer;
        return $this;
    }

    public function getSensor(): ?string
    {
        return $this->sensor;
    }

    public function setSensor(?string $sensor): self
    {
        $this->sensor = $sensor;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getSourceRef(): ?string
    {
        return $this->sourceRef;
    }

    public function setSourceRef(?string $sourceRef): self
    {
        $this->sourceRef = $sourceRef;
        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->zone = $zone;
        return $this;
    }

}
