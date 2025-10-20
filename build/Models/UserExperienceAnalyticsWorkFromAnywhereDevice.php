<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereDevice
 */
class UserExperienceAnalyticsWorkFromAnywhereDevice
{
    /**
     * When TRUE, indicates the intune device''s autopilot profile is assigned. When FALSE, indicates it''s not Assigned. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $autoPilotProfileAssigned;

    /**
     * When TRUE, indicates the intune device''s autopilot is registered. When FALSE, indicates it''s not registered. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $autoPilotRegistered;

    /**
     * The Azure Active Directory (Azure AD) device Id. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $azureAdDeviceId;

    /**
     * The work from anywhere device''s Azure Active Directory (Azure AD) join type. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $azureAdJoinType;

    /**
     * When TRUE, indicates the device''s Azure Active Directory (Azure AD) is registered. When False, indicates it''s not registered. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $azureAdRegistered;

    /**
     * Indicates per device cloud identity score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $cloudIdentityScore;

    /**
     * Indicates per device cloud management score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $cloudManagementScore;

    /**
     * Indicates per device cloud provisioning score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $cloudProvisioningScore;

    /**
     * When TRUE, indicates the device''s compliance policy is set to intune. When FALSE, indicates it''s not set to intune. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $compliancePolicySetToIntune;

    /**
     * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceId;

    /**
     * The name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceName;

    /**
     */
    private ?string $healthStatus;

    /**
     * When TRUE, indicates the device''s Cloud Management Gateway for Configuration Manager is enabled. When FALSE, indicates it''s not enabled. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $isCloudManagedGatewayEnabled;

    /**
     * The management agent of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $managedBy;

    /**
     * The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $manufacturer;

    /**
     * The model name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $model;

    /**
     * When TRUE, indicates OS check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $osCheckFailed;

    /**
     * The OS description of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $osDescription;

    /**
     * The OS version of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $osVersion;

    /**
     * When TRUE, indicates the device''s other workloads is set to intune. When FALSE, indicates it''s not set to intune. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $otherWorkloadsSetToIntune;

    /**
     * Ownership of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $ownership;

    /**
     * When TRUE, indicates processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $processor64BitCheckFailed;

    /**
     * When TRUE, indicates processor hardware core count check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $processorCoreCountCheckFailed;

    /**
     * When TRUE, indicates processor hardware family check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $processorFamilyCheckFailed;

    /**
     * When TRUE, indicates processor hardware speed check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $processorSpeedCheckFailed;

    /**
     * When TRUE, indicates RAM hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $ramCheckFailed;

    /**
     * When TRUE, indicates secure boot hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $secureBootCheckFailed;

    /**
     * The serial number of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $serialNumber;

    /**
     * When TRUE, indicates storage hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $storageCheckFailed;

    /**
     * When TRUE, indicates the device is Tenant Attached. When FALSE, indicates it''s not Tenant Attached. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $tenantAttached;

    /**
     * When TRUE, indicates Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $tpmCheckFailed;

    /**
     */
    private ?string $upgradeEligibility;

    /**
     * Indicates per device windows score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $windowsScore;

    /**
     * The user experience analytics device for work from anywhere report.
     */
    private ?string $workFromAnywhereScore;

    public function getAutoPilotProfileAssigned(): ?bool
    {
        return $this->autoPilotProfileAssigned;
    }

    public function setAutoPilotProfileAssigned(?bool $autoPilotProfileAssigned): self
    {
        $this->autoPilotProfileAssigned = $autoPilotProfileAssigned;
        return $this;
    }

    public function getAutoPilotRegistered(): ?bool
    {
        return $this->autoPilotRegistered;
    }

    public function setAutoPilotRegistered(?bool $autoPilotRegistered): self
    {
        $this->autoPilotRegistered = $autoPilotRegistered;
        return $this;
    }

    public function getAzureAdDeviceId(): ?string
    {
        return $this->azureAdDeviceId;
    }

    public function setAzureAdDeviceId(?string $azureAdDeviceId): self
    {
        $this->azureAdDeviceId = $azureAdDeviceId;
        return $this;
    }

    public function getAzureAdJoinType(): ?string
    {
        return $this->azureAdJoinType;
    }

    public function setAzureAdJoinType(?string $azureAdJoinType): self
    {
        $this->azureAdJoinType = $azureAdJoinType;
        return $this;
    }

    public function getAzureAdRegistered(): ?bool
    {
        return $this->azureAdRegistered;
    }

    public function setAzureAdRegistered(?bool $azureAdRegistered): self
    {
        $this->azureAdRegistered = $azureAdRegistered;
        return $this;
    }

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

    public function getCompliancePolicySetToIntune(): ?bool
    {
        return $this->compliancePolicySetToIntune;
    }

    public function setCompliancePolicySetToIntune(?bool $compliancePolicySetToIntune): self
    {
        $this->compliancePolicySetToIntune = $compliancePolicySetToIntune;
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

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
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

    public function getIsCloudManagedGatewayEnabled(): ?bool
    {
        return $this->isCloudManagedGatewayEnabled;
    }

    public function setIsCloudManagedGatewayEnabled(?bool $isCloudManagedGatewayEnabled): self
    {
        $this->isCloudManagedGatewayEnabled = $isCloudManagedGatewayEnabled;
        return $this;
    }

    public function getManagedBy(): ?string
    {
        return $this->managedBy;
    }

    public function setManagedBy(?string $managedBy): self
    {
        $this->managedBy = $managedBy;
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

    public function getOsCheckFailed(): ?bool
    {
        return $this->osCheckFailed;
    }

    public function setOsCheckFailed(?bool $osCheckFailed): self
    {
        $this->osCheckFailed = $osCheckFailed;
        return $this;
    }

    public function getOsDescription(): ?string
    {
        return $this->osDescription;
    }

    public function setOsDescription(?string $osDescription): self
    {
        $this->osDescription = $osDescription;
        return $this;
    }

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;
        return $this;
    }

    public function getOtherWorkloadsSetToIntune(): ?bool
    {
        return $this->otherWorkloadsSetToIntune;
    }

    public function setOtherWorkloadsSetToIntune(?bool $otherWorkloadsSetToIntune): self
    {
        $this->otherWorkloadsSetToIntune = $otherWorkloadsSetToIntune;
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

    public function getProcessor64BitCheckFailed(): ?bool
    {
        return $this->processor64BitCheckFailed;
    }

    public function setProcessor64BitCheckFailed(?bool $processor64BitCheckFailed): self
    {
        $this->processor64BitCheckFailed = $processor64BitCheckFailed;
        return $this;
    }

    public function getProcessorCoreCountCheckFailed(): ?bool
    {
        return $this->processorCoreCountCheckFailed;
    }

    public function setProcessorCoreCountCheckFailed(?bool $processorCoreCountCheckFailed): self
    {
        $this->processorCoreCountCheckFailed = $processorCoreCountCheckFailed;
        return $this;
    }

    public function getProcessorFamilyCheckFailed(): ?bool
    {
        return $this->processorFamilyCheckFailed;
    }

    public function setProcessorFamilyCheckFailed(?bool $processorFamilyCheckFailed): self
    {
        $this->processorFamilyCheckFailed = $processorFamilyCheckFailed;
        return $this;
    }

    public function getProcessorSpeedCheckFailed(): ?bool
    {
        return $this->processorSpeedCheckFailed;
    }

    public function setProcessorSpeedCheckFailed(?bool $processorSpeedCheckFailed): self
    {
        $this->processorSpeedCheckFailed = $processorSpeedCheckFailed;
        return $this;
    }

    public function getRamCheckFailed(): ?bool
    {
        return $this->ramCheckFailed;
    }

    public function setRamCheckFailed(?bool $ramCheckFailed): self
    {
        $this->ramCheckFailed = $ramCheckFailed;
        return $this;
    }

    public function getSecureBootCheckFailed(): ?bool
    {
        return $this->secureBootCheckFailed;
    }

    public function setSecureBootCheckFailed(?bool $secureBootCheckFailed): self
    {
        $this->secureBootCheckFailed = $secureBootCheckFailed;
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

    public function getStorageCheckFailed(): ?bool
    {
        return $this->storageCheckFailed;
    }

    public function setStorageCheckFailed(?bool $storageCheckFailed): self
    {
        $this->storageCheckFailed = $storageCheckFailed;
        return $this;
    }

    public function getTenantAttached(): ?bool
    {
        return $this->tenantAttached;
    }

    public function setTenantAttached(?bool $tenantAttached): self
    {
        $this->tenantAttached = $tenantAttached;
        return $this;
    }

    public function getTpmCheckFailed(): ?bool
    {
        return $this->tpmCheckFailed;
    }

    public function setTpmCheckFailed(?bool $tpmCheckFailed): self
    {
        $this->tpmCheckFailed = $tpmCheckFailed;
        return $this;
    }

    public function getUpgradeEligibility(): ?string
    {
        return $this->upgradeEligibility;
    }

    public function setUpgradeEligibility(?string $upgradeEligibility): self
    {
        $this->upgradeEligibility = $upgradeEligibility;
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
