<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
 */
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
{
    /**
     * The user experience analytics work from anywhere Autopilot devices summary. Read-only.
     */
    private ?string $autopilotDevicesSummary;

    /**
     * The user experience analytics work from anywhere Cloud Identity devices summary. Read-only.
     */
    private ?string $cloudIdentityDevicesSummary;

    /**
     * The user experience analytics work from anywhere Cloud management devices summary. Read-only.
     */
    private ?string $cloudManagementDevicesSummary;

    /**
     * Total number of co-managed devices. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $coManagedDevices;

    /**
     * The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $devicesNotAutopilotRegistered;

    /**
     * The count of intune devices not autopilot profile assigned. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $devicesWithoutAutopilotProfileAssigned;

    /**
     * The count of devices that are not cloud identity. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $devicesWithoutCloudIdentity;

    /**
     * The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $intuneDevices;

    /**
     * Total count of tenant attach devices. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $tenantAttachDevices;

    /**
     * The total count of devices. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $totalDevices;

    /**
     * The count of Windows 10 devices that have unsupported OS versions. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $unsupportedOSversionDevices;

    /**
     * The count of windows 10 devices. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $windows10Devices;

    /**
     * The user experience analytics work from anywhere Windows 10 devices summary. Read-only.
     */
    private ?string $windows10DevicesSummary;

    /**
     * The user experience analytics Work From Anywhere metrics devices summary.
     */
    private ?string $windows10DevicesWithoutTenantAttach;


    public function getAutopilotDevicesSummary(): ?string
    {
        return $this->autopilotDevicesSummary;
    }

    public function setAutopilotDevicesSummary(?string $autopilotDevicesSummary): self
    {
        $this->autopilotDevicesSummary = $autopilotDevicesSummary;
        return $this;
    }

    public function getCloudIdentityDevicesSummary(): ?string
    {
        return $this->cloudIdentityDevicesSummary;
    }

    public function setCloudIdentityDevicesSummary(?string $cloudIdentityDevicesSummary): self
    {
        $this->cloudIdentityDevicesSummary = $cloudIdentityDevicesSummary;
        return $this;
    }

    public function getCloudManagementDevicesSummary(): ?string
    {
        return $this->cloudManagementDevicesSummary;
    }

    public function setCloudManagementDevicesSummary(?string $cloudManagementDevicesSummary): self
    {
        $this->cloudManagementDevicesSummary = $cloudManagementDevicesSummary;
        return $this;
    }

    public function getCoManagedDevices(): ?float
    {
        return $this->coManagedDevices;
    }

    public function setCoManagedDevices(?float $coManagedDevices): self
    {
        $this->coManagedDevices = $coManagedDevices;
        return $this;
    }

    public function getDevicesNotAutopilotRegistered(): ?float
    {
        return $this->devicesNotAutopilotRegistered;
    }

    public function setDevicesNotAutopilotRegistered(?float $devicesNotAutopilotRegistered): self
    {
        $this->devicesNotAutopilotRegistered = $devicesNotAutopilotRegistered;
        return $this;
    }

    public function getDevicesWithoutAutopilotProfileAssigned(): ?float
    {
        return $this->devicesWithoutAutopilotProfileAssigned;
    }

    public function setDevicesWithoutAutopilotProfileAssigned(?float $devicesWithoutAutopilotProfileAssigned): self
    {
        $this->devicesWithoutAutopilotProfileAssigned = $devicesWithoutAutopilotProfileAssigned;
        return $this;
    }

    public function getDevicesWithoutCloudIdentity(): ?float
    {
        return $this->devicesWithoutCloudIdentity;
    }

    public function setDevicesWithoutCloudIdentity(?float $devicesWithoutCloudIdentity): self
    {
        $this->devicesWithoutCloudIdentity = $devicesWithoutCloudIdentity;
        return $this;
    }

    public function getIntuneDevices(): ?float
    {
        return $this->intuneDevices;
    }

    public function setIntuneDevices(?float $intuneDevices): self
    {
        $this->intuneDevices = $intuneDevices;
        return $this;
    }

    public function getTenantAttachDevices(): ?float
    {
        return $this->tenantAttachDevices;
    }

    public function setTenantAttachDevices(?float $tenantAttachDevices): self
    {
        $this->tenantAttachDevices = $tenantAttachDevices;
        return $this;
    }

    public function getTotalDevices(): ?float
    {
        return $this->totalDevices;
    }

    public function setTotalDevices(?float $totalDevices): self
    {
        $this->totalDevices = $totalDevices;
        return $this;
    }

    public function getUnsupportedOSversionDevices(): ?float
    {
        return $this->unsupportedOSversionDevices;
    }

    public function setUnsupportedOSversionDevices(?float $unsupportedOSversionDevices): self
    {
        $this->unsupportedOSversionDevices = $unsupportedOSversionDevices;
        return $this;
    }

    public function getWindows10Devices(): ?float
    {
        return $this->windows10Devices;
    }

    public function setWindows10Devices(?float $windows10Devices): self
    {
        $this->windows10Devices = $windows10Devices;
        return $this;
    }

    public function getWindows10DevicesSummary(): ?string
    {
        return $this->windows10DevicesSummary;
    }

    public function setWindows10DevicesSummary(?string $windows10DevicesSummary): self
    {
        $this->windows10DevicesSummary = $windows10DevicesSummary;
        return $this;
    }

    public function getWindows10DevicesWithoutTenantAttach(): ?string
    {
        return $this->windows10DevicesWithoutTenantAttach;
    }

    public function setWindows10DevicesWithoutTenantAttach(?string $windows10DevicesWithoutTenantAttach): self
    {
        $this->windows10DevicesWithoutTenantAttach = $windows10DevicesWithoutTenantAttach;
        return $this;
    }

}
