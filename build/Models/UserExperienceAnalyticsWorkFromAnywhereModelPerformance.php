<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereModelPerformance
 */
class UserExperienceAnalyticsWorkFromAnywhereModelPerformance
{
    /**
     * The cloud identity score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $cloudIdentityScore;

    /**
     * The cloud management score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $cloudManagementScore;

    /**
     * The cloud provisioning score of the device model.  Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $cloudProvisioningScore;

    /**
     */
    private ?string $healthStatus;

    /**
     * The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $manufacturer;

    /**
     * The model name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $model;

    /**
     * The devices count for the model. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     */
    private ?float $modelDeviceCount;

    /**
     * The window score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $windowsScore;

    /**
     * The user experience analytics work from anywhere model performance.
     */
    private ?string $workFromAnywhereScore;

    public function getCloudIdentityScore(): ?string
    {
        return $this->cloudIdentityScore;
    }

    public function setCloudIdentityScore(?string $cloudIdentityScore): self
    {
        $this->cloudIdentityScore = $cloudIdentityScore;
        return $this;
    }

    public function getCloudManagementScore(): ?string
    {
        return $this->cloudManagementScore;
    }

    public function setCloudManagementScore(?string $cloudManagementScore): self
    {
        $this->cloudManagementScore = $cloudManagementScore;
        return $this;
    }

    public function getCloudProvisioningScore(): ?string
    {
        return $this->cloudProvisioningScore;
    }

    public function setCloudProvisioningScore(?string $cloudProvisioningScore): self
    {
        $this->cloudProvisioningScore = $cloudProvisioningScore;
        return $this;
    }

    public function getHealthStatus(): ?string
    {
        return $this->healthStatus;
    }

    public function setHealthStatus(?string $healthStatus): self
    {
        $this->healthStatus = $healthStatus;
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

    public function getModelDeviceCount(): ?float
    {
        return $this->modelDeviceCount;
    }

    public function setModelDeviceCount(?float $modelDeviceCount): self
    {
        $this->modelDeviceCount = $modelDeviceCount;
        return $this;
    }

    public function getWindowsScore(): ?string
    {
        return $this->windowsScore;
    }

    public function setWindowsScore(?string $windowsScore): self
    {
        $this->windowsScore = $windowsScore;
        return $this;
    }

    public function getWorkFromAnywhereScore(): ?string
    {
        return $this->workFromAnywhereScore;
    }

    public function setWorkFromAnywhereScore(?string $workFromAnywhereScore): self
    {
        $this->workFromAnywhereScore = $workFromAnywhereScore;
        return $this;
    }

}
