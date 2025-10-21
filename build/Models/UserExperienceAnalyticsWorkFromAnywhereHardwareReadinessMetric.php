<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
{
    /**
     * The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $osCheckFailedPercentage;

    /**
     * The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $processor64BitCheckFailedPercentage;

    /**
     * The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $processorCoreCountCheckFailedPercentage;

    /**
     * The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $processorFamilyCheckFailedPercentage;

    /**
     * The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $processorSpeedCheckFailedPercentage;

    /**
     * The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $ramCheckFailedPercentage;

    /**
     * The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $secureBootCheckFailedPercentage;

    /**
     * The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $storageCheckFailedPercentage;

    /**
     * The count of total devices in an organization. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $totalDeviceCount;

    /**
     * The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $tpmCheckFailedPercentage;

    /**
     * The user experience analytics hardware readiness entity contains account level information about hardware blockers for windows upgrade.
     */
    private ?string $upgradeEligibleDeviceCount;


    public function getOsCheckFailedPercentage(): ?string
    {
        return $this->osCheckFailedPercentage;
    }

    public function setOsCheckFailedPercentage(?string $osCheckFailedPercentage): self
    {
        $this->osCheckFailedPercentage = $osCheckFailedPercentage;
        return $this;
    }

    public function getProcessor64BitCheckFailedPercentage(): ?string
    {
        return $this->processor64BitCheckFailedPercentage;
    }

    public function setProcessor64BitCheckFailedPercentage(?string $processor64BitCheckFailedPercentage): self
    {
        $this->processor64BitCheckFailedPercentage = $processor64BitCheckFailedPercentage;
        return $this;
    }

    public function getProcessorCoreCountCheckFailedPercentage(): ?string
    {
        return $this->processorCoreCountCheckFailedPercentage;
    }

    public function setProcessorCoreCountCheckFailedPercentage(?string $processorCoreCountCheckFailedPercentage): self
    {
        $this->processorCoreCountCheckFailedPercentage = $processorCoreCountCheckFailedPercentage;
        return $this;
    }

    public function getProcessorFamilyCheckFailedPercentage(): ?string
    {
        return $this->processorFamilyCheckFailedPercentage;
    }

    public function setProcessorFamilyCheckFailedPercentage(?string $processorFamilyCheckFailedPercentage): self
    {
        $this->processorFamilyCheckFailedPercentage = $processorFamilyCheckFailedPercentage;
        return $this;
    }

    public function getProcessorSpeedCheckFailedPercentage(): ?string
    {
        return $this->processorSpeedCheckFailedPercentage;
    }

    public function setProcessorSpeedCheckFailedPercentage(?string $processorSpeedCheckFailedPercentage): self
    {
        $this->processorSpeedCheckFailedPercentage = $processorSpeedCheckFailedPercentage;
        return $this;
    }

    public function getRamCheckFailedPercentage(): ?string
    {
        return $this->ramCheckFailedPercentage;
    }

    public function setRamCheckFailedPercentage(?string $ramCheckFailedPercentage): self
    {
        $this->ramCheckFailedPercentage = $ramCheckFailedPercentage;
        return $this;
    }

    public function getSecureBootCheckFailedPercentage(): ?string
    {
        return $this->secureBootCheckFailedPercentage;
    }

    public function setSecureBootCheckFailedPercentage(?string $secureBootCheckFailedPercentage): self
    {
        $this->secureBootCheckFailedPercentage = $secureBootCheckFailedPercentage;
        return $this;
    }

    public function getStorageCheckFailedPercentage(): ?string
    {
        return $this->storageCheckFailedPercentage;
    }

    public function setStorageCheckFailedPercentage(?string $storageCheckFailedPercentage): self
    {
        $this->storageCheckFailedPercentage = $storageCheckFailedPercentage;
        return $this;
    }

    public function getTotalDeviceCount(): ?float
    {
        return $this->totalDeviceCount;
    }

    public function setTotalDeviceCount(?float $totalDeviceCount): self
    {
        $this->totalDeviceCount = $totalDeviceCount;
        return $this;
    }

    public function getTpmCheckFailedPercentage(): ?string
    {
        return $this->tpmCheckFailedPercentage;
    }

    public function setTpmCheckFailedPercentage(?string $tpmCheckFailedPercentage): self
    {
        $this->tpmCheckFailedPercentage = $tpmCheckFailedPercentage;
        return $this;
    }

    public function getUpgradeEligibleDeviceCount(): ?string
    {
        return $this->upgradeEligibleDeviceCount;
    }

    public function setUpgradeEligibleDeviceCount(?string $upgradeEligibleDeviceCount): self
    {
        $this->upgradeEligibleDeviceCount = $upgradeEligibleDeviceCount;
        return $this;
    }

}
