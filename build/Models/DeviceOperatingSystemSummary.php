<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceOperatingSystemSummary
 */
class DeviceOperatingSystemSummary
{
    /**
     * The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647
     */
    private ?float $androidCorporateWorkProfileCount;

    /**
     * Number of android device count.
     */
    private ?float $androidCount;

    /**
     * Number of dedicated Android devices.
     */
    private ?float $androidDedicatedCount;

    /**
     * Number of device admin Android devices.
     */
    private ?float $androidDeviceAdminCount;

    /**
     * Number of fully managed Android devices.
     */
    private ?float $androidFullyManagedCount;

    /**
     * Number of work profile Android devices.
     */
    private ?float $androidWorkProfileCount;

    /**
     * Number of ConfigMgr managed devices.
     */
    private ?float $configMgrDeviceCount;

    /**
     * Number of iOS device count.
     */
    private ?float $iosCount;

    /**
     * Number of Mac OS X device count.
     */
    private ?float $macOSCount;

    /**
     * Number of unknown device count.
     */
    private ?float $unknownCount;

    /**
     * Number of Windows device count.
     */
    private ?float $windowsCount;

    /**
     * Device operating system summary.
     */
    private ?string $windowsMobileCount;

    public function getAndroidCorporateWorkProfileCount(): ?float
    {
        return $this->androidCorporateWorkProfileCount;
    }

    public function setAndroidCorporateWorkProfileCount(?float $androidCorporateWorkProfileCount): self
    {
        $this->androidCorporateWorkProfileCount = $androidCorporateWorkProfileCount;
        return $this;
    }

    public function getAndroidCount(): ?float
    {
        return $this->androidCount;
    }

    public function setAndroidCount(?float $androidCount): self
    {
        $this->androidCount = $androidCount;
        return $this;
    }

    public function getAndroidDedicatedCount(): ?float
    {
        return $this->androidDedicatedCount;
    }

    public function setAndroidDedicatedCount(?float $androidDedicatedCount): self
    {
        $this->androidDedicatedCount = $androidDedicatedCount;
        return $this;
    }

    public function getAndroidDeviceAdminCount(): ?float
    {
        return $this->androidDeviceAdminCount;
    }

    public function setAndroidDeviceAdminCount(?float $androidDeviceAdminCount): self
    {
        $this->androidDeviceAdminCount = $androidDeviceAdminCount;
        return $this;
    }

    public function getAndroidFullyManagedCount(): ?float
    {
        return $this->androidFullyManagedCount;
    }

    public function setAndroidFullyManagedCount(?float $androidFullyManagedCount): self
    {
        $this->androidFullyManagedCount = $androidFullyManagedCount;
        return $this;
    }

    public function getAndroidWorkProfileCount(): ?float
    {
        return $this->androidWorkProfileCount;
    }

    public function setAndroidWorkProfileCount(?float $androidWorkProfileCount): self
    {
        $this->androidWorkProfileCount = $androidWorkProfileCount;
        return $this;
    }

    public function getConfigMgrDeviceCount(): ?float
    {
        return $this->configMgrDeviceCount;
    }

    public function setConfigMgrDeviceCount(?float $configMgrDeviceCount): self
    {
        $this->configMgrDeviceCount = $configMgrDeviceCount;
        return $this;
    }

    public function getIosCount(): ?float
    {
        return $this->iosCount;
    }

    public function setIosCount(?float $iosCount): self
    {
        $this->iosCount = $iosCount;
        return $this;
    }

    public function getMacOSCount(): ?float
    {
        return $this->macOSCount;
    }

    public function setMacOSCount(?float $macOSCount): self
    {
        $this->macOSCount = $macOSCount;
        return $this;
    }

    public function getUnknownCount(): ?float
    {
        return $this->unknownCount;
    }

    public function setUnknownCount(?float $unknownCount): self
    {
        $this->unknownCount = $unknownCount;
        return $this;
    }

    public function getWindowsCount(): ?float
    {
        return $this->windowsCount;
    }

    public function setWindowsCount(?float $windowsCount): self
    {
        $this->windowsCount = $windowsCount;
        return $this;
    }

    public function getWindowsMobileCount(): ?string
    {
        return $this->windowsMobileCount;
    }

    public function setWindowsMobileCount(?string $windowsMobileCount): self
    {
        $this->windowsMobileCount = $windowsMobileCount;
        return $this;
    }

}
