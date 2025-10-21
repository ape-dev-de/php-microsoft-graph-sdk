<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceInfo
 */
class DeviceInfo
{
    /**
     * Unique identifier set by Azure Device Registration Service at the time of registration.
     */
    private ?string $deviceId;

    /**
     * The display name for the device.
     */
    private ?string $displayName;

    /**
     * Enrollment profile applied to the device.
     */
    private ?string $enrollmentProfileName;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute1;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute10;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute11;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute12;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute13;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute14;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute15;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute2;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute3;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute4;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute5;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute6;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute7;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute8;

    /**
     * Extension attribute.
     */
    private ?string $extensionAttribute9;

    /**
     * Indicates the device compliance status with Mobile Management Device (MDM) policies. Default is false.
     */
    private ?bool $isCompliant;

    /**
     * Manufacturer of the device.
     */
    private ?string $manufacturer;

    /**
     * Application identifier used to register device into MDM.
     */
    private ?string $mdmAppId;

    /**
     * Model of the device.
     */
    private ?string $model;

    /**
     * The type of operating system on the device.
     */
    private ?string $operatingSystem;

    /**
     * The version of the operating system on the device.
     */
    private ?string $operatingSystemVersion;

    /**
     * Ownership of the device. This property is set by Intune.
     */
    private ?string $ownership;

    /**
     * A collection of physical identifiers for the device.
     * @var string[]
     */
    private array $physicalIds = [];

    /**
     * The profile type of the device.
     */
    private ?string $profileType;

    /**
     * List of labels applied to the device by the system.
     * @var string[]
     */
    private array $systemLabels = [];

    /**
     * Type of trust for the joined device.
     */
    private ?string $trustType;


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

    public function getEnrollmentProfileName(): ?string
    {
        return $this->enrollmentProfileName;
    }

    public function setEnrollmentProfileName(?string $enrollmentProfileName): self
    {
        $this->enrollmentProfileName = $enrollmentProfileName;
        return $this;
    }

    public function getExtensionAttribute1(): ?string
    {
        return $this->extensionAttribute1;
    }

    public function setExtensionAttribute1(?string $extensionAttribute1): self
    {
        $this->extensionAttribute1 = $extensionAttribute1;
        return $this;
    }

    public function getExtensionAttribute10(): ?string
    {
        return $this->extensionAttribute10;
    }

    public function setExtensionAttribute10(?string $extensionAttribute10): self
    {
        $this->extensionAttribute10 = $extensionAttribute10;
        return $this;
    }

    public function getExtensionAttribute11(): ?string
    {
        return $this->extensionAttribute11;
    }

    public function setExtensionAttribute11(?string $extensionAttribute11): self
    {
        $this->extensionAttribute11 = $extensionAttribute11;
        return $this;
    }

    public function getExtensionAttribute12(): ?string
    {
        return $this->extensionAttribute12;
    }

    public function setExtensionAttribute12(?string $extensionAttribute12): self
    {
        $this->extensionAttribute12 = $extensionAttribute12;
        return $this;
    }

    public function getExtensionAttribute13(): ?string
    {
        return $this->extensionAttribute13;
    }

    public function setExtensionAttribute13(?string $extensionAttribute13): self
    {
        $this->extensionAttribute13 = $extensionAttribute13;
        return $this;
    }

    public function getExtensionAttribute14(): ?string
    {
        return $this->extensionAttribute14;
    }

    public function setExtensionAttribute14(?string $extensionAttribute14): self
    {
        $this->extensionAttribute14 = $extensionAttribute14;
        return $this;
    }

    public function getExtensionAttribute15(): ?string
    {
        return $this->extensionAttribute15;
    }

    public function setExtensionAttribute15(?string $extensionAttribute15): self
    {
        $this->extensionAttribute15 = $extensionAttribute15;
        return $this;
    }

    public function getExtensionAttribute2(): ?string
    {
        return $this->extensionAttribute2;
    }

    public function setExtensionAttribute2(?string $extensionAttribute2): self
    {
        $this->extensionAttribute2 = $extensionAttribute2;
        return $this;
    }

    public function getExtensionAttribute3(): ?string
    {
        return $this->extensionAttribute3;
    }

    public function setExtensionAttribute3(?string $extensionAttribute3): self
    {
        $this->extensionAttribute3 = $extensionAttribute3;
        return $this;
    }

    public function getExtensionAttribute4(): ?string
    {
        return $this->extensionAttribute4;
    }

    public function setExtensionAttribute4(?string $extensionAttribute4): self
    {
        $this->extensionAttribute4 = $extensionAttribute4;
        return $this;
    }

    public function getExtensionAttribute5(): ?string
    {
        return $this->extensionAttribute5;
    }

    public function setExtensionAttribute5(?string $extensionAttribute5): self
    {
        $this->extensionAttribute5 = $extensionAttribute5;
        return $this;
    }

    public function getExtensionAttribute6(): ?string
    {
        return $this->extensionAttribute6;
    }

    public function setExtensionAttribute6(?string $extensionAttribute6): self
    {
        $this->extensionAttribute6 = $extensionAttribute6;
        return $this;
    }

    public function getExtensionAttribute7(): ?string
    {
        return $this->extensionAttribute7;
    }

    public function setExtensionAttribute7(?string $extensionAttribute7): self
    {
        $this->extensionAttribute7 = $extensionAttribute7;
        return $this;
    }

    public function getExtensionAttribute8(): ?string
    {
        return $this->extensionAttribute8;
    }

    public function setExtensionAttribute8(?string $extensionAttribute8): self
    {
        $this->extensionAttribute8 = $extensionAttribute8;
        return $this;
    }

    public function getExtensionAttribute9(): ?string
    {
        return $this->extensionAttribute9;
    }

    public function setExtensionAttribute9(?string $extensionAttribute9): self
    {
        $this->extensionAttribute9 = $extensionAttribute9;
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

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getMdmAppId(): ?string
    {
        return $this->mdmAppId;
    }

    public function setMdmAppId(?string $mdmAppId): self
    {
        $this->mdmAppId = $mdmAppId;
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

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getOperatingSystemVersion(): ?string
    {
        return $this->operatingSystemVersion;
    }

    public function setOperatingSystemVersion(?string $operatingSystemVersion): self
    {
        $this->operatingSystemVersion = $operatingSystemVersion;
        return $this;
    }

    public function getOwnership(): ?string
    {
        return $this->ownership;
    }

    public function setOwnership(?string $ownership): self
    {
        $this->ownership = $ownership;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPhysicalIds(): array
    {
        return $this->physicalIds;
    }

    /**
     * @param string[] $physicalIds
     */
    public function setPhysicalIds(array $physicalIds): self
    {
        $this->physicalIds = $physicalIds;
        return $this;
    }

    public function getProfileType(): ?string
    {
        return $this->profileType;
    }

    public function setProfileType(?string $profileType): self
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSystemLabels(): array
    {
        return $this->systemLabels;
    }

    /**
     * @param string[] $systemLabels
     */
    public function setSystemLabels(array $systemLabels): self
    {
        $this->systemLabels = $systemLabels;
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
