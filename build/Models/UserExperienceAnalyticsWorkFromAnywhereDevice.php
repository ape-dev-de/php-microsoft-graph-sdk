<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereDevice
 */
class UserExperienceAnalyticsWorkFromAnywhereDevice
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** When TRUE, indicates the intune device's autopilot profile is assigned. When FALSE, indicates it's not Assigned. Supports: $select, $OrderBy. Read-only. */
    public ?bool $autoPilotProfileAssigned = null;

    /** When TRUE, indicates the intune device's autopilot is registered. When FALSE, indicates it's not registered. Supports: $select, $OrderBy. Read-only. */
    public ?bool $autoPilotRegistered = null;

    /** The Azure Active Directory (Azure AD) device Id. Supports: $select, $OrderBy. Read-only. */
    public ?string $azureAdDeviceId = null;

    /** The work from anywhere device's Azure Active Directory (Azure AD) join type. Supports: $select, $OrderBy. Read-only. */
    public ?string $azureAdJoinType = null;

    /** When TRUE, indicates the device's Azure Active Directory (Azure AD) is registered. When False, indicates it's not registered. Supports: $select, $OrderBy. Read-only. */
    public ?bool $azureAdRegistered = null;

    /** 
     * Indicates per device cloud identity score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cloudIdentityScore = null;

    /** 
     * Indicates per device cloud management score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cloudManagementScore = null;

    /** 
     * Indicates per device cloud provisioning score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cloudProvisioningScore = null;

    /** When TRUE, indicates the device's compliance policy is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only. */
    public ?bool $compliancePolicySetToIntune = null;

    /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceId = null;

    /** The name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceName = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** When TRUE, indicates the device's Cloud Management Gateway for Configuration Manager is enabled. When FALSE, indicates it's not enabled. Supports: $select, $OrderBy. Read-only. */
    public ?bool $isCloudManagedGatewayEnabled = null;

    /** The management agent of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $managedBy = null;

    /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $manufacturer = null;

    /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $model = null;

    /** When TRUE, indicates OS check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $osCheckFailed = null;

    /** The OS description of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $osDescription = null;

    /** The OS version of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $osVersion = null;

    /** When TRUE, indicates the device's other workloads is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only. */
    public ?bool $otherWorkloadsSetToIntune = null;

    /** Ownership of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $ownership = null;

    /** When TRUE, indicates processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $processor64BitCheckFailed = null;

    /** When TRUE, indicates processor hardware core count check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $processorCoreCountCheckFailed = null;

    /** When TRUE, indicates processor hardware family check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $processorFamilyCheckFailed = null;

    /** When TRUE, indicates processor hardware speed check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $processorSpeedCheckFailed = null;

    /** When TRUE, indicates RAM hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $ramCheckFailed = null;

    /** When TRUE, indicates secure boot hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $secureBootCheckFailed = null;

    /** The serial number of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $serialNumber = null;

    /** When TRUE, indicates storage hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $storageCheckFailed = null;

    /** When TRUE, indicates the device is Tenant Attached. When FALSE, indicates it's not Tenant Attached. Supports: $select, $OrderBy. Read-only. */
    public ?bool $tenantAttached = null;

    /** When TRUE, indicates Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
    public ?bool $tpmCheckFailed = null;

    /**  */
    public ?OperatingSystemUpgradeEligibility $upgradeEligibility = null;

    /** 
     * Indicates per device windows score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $windowsScore = null;

    /** 
     * Indicates work from anywhere per device overall score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $workFromAnywhereScore = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['autoPilotProfileAssigned'])) {
            $this->autoPilotProfileAssigned = is_bool($data['autoPilotProfileAssigned']) ? $data['autoPilotProfileAssigned'] : (bool)$data['autoPilotProfileAssigned'];
        }
        if (isset($data['autoPilotRegistered'])) {
            $this->autoPilotRegistered = is_bool($data['autoPilotRegistered']) ? $data['autoPilotRegistered'] : (bool)$data['autoPilotRegistered'];
        }
        if (isset($data['azureAdDeviceId'])) {
            $this->azureAdDeviceId = $data['azureAdDeviceId'];
        }
        if (isset($data['azureAdJoinType'])) {
            $this->azureAdJoinType = $data['azureAdJoinType'];
        }
        if (isset($data['azureAdRegistered'])) {
            $this->azureAdRegistered = is_bool($data['azureAdRegistered']) ? $data['azureAdRegistered'] : (bool)$data['azureAdRegistered'];
        }
        if (isset($data['cloudIdentityScore'])) {
            $this->cloudIdentityScore = is_numeric($data['cloudIdentityScore']) ? (float)$data['cloudIdentityScore'] : $data['cloudIdentityScore'];
        }
        if (isset($data['cloudManagementScore'])) {
            $this->cloudManagementScore = is_numeric($data['cloudManagementScore']) ? (float)$data['cloudManagementScore'] : $data['cloudManagementScore'];
        }
        if (isset($data['cloudProvisioningScore'])) {
            $this->cloudProvisioningScore = is_numeric($data['cloudProvisioningScore']) ? (float)$data['cloudProvisioningScore'] : $data['cloudProvisioningScore'];
        }
        if (isset($data['compliancePolicySetToIntune'])) {
            $this->compliancePolicySetToIntune = is_bool($data['compliancePolicySetToIntune']) ? $data['compliancePolicySetToIntune'] : (bool)$data['compliancePolicySetToIntune'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = is_array($data['healthStatus']) ? new UserExperienceAnalyticsHealthState($data['healthStatus']) : $data['healthStatus'];
        }
        if (isset($data['isCloudManagedGatewayEnabled'])) {
            $this->isCloudManagedGatewayEnabled = is_bool($data['isCloudManagedGatewayEnabled']) ? $data['isCloudManagedGatewayEnabled'] : (bool)$data['isCloudManagedGatewayEnabled'];
        }
        if (isset($data['managedBy'])) {
            $this->managedBy = $data['managedBy'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['osCheckFailed'])) {
            $this->osCheckFailed = is_bool($data['osCheckFailed']) ? $data['osCheckFailed'] : (bool)$data['osCheckFailed'];
        }
        if (isset($data['osDescription'])) {
            $this->osDescription = $data['osDescription'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
        if (isset($data['otherWorkloadsSetToIntune'])) {
            $this->otherWorkloadsSetToIntune = is_bool($data['otherWorkloadsSetToIntune']) ? $data['otherWorkloadsSetToIntune'] : (bool)$data['otherWorkloadsSetToIntune'];
        }
        if (isset($data['ownership'])) {
            $this->ownership = $data['ownership'];
        }
        if (isset($data['processor64BitCheckFailed'])) {
            $this->processor64BitCheckFailed = is_bool($data['processor64BitCheckFailed']) ? $data['processor64BitCheckFailed'] : (bool)$data['processor64BitCheckFailed'];
        }
        if (isset($data['processorCoreCountCheckFailed'])) {
            $this->processorCoreCountCheckFailed = is_bool($data['processorCoreCountCheckFailed']) ? $data['processorCoreCountCheckFailed'] : (bool)$data['processorCoreCountCheckFailed'];
        }
        if (isset($data['processorFamilyCheckFailed'])) {
            $this->processorFamilyCheckFailed = is_bool($data['processorFamilyCheckFailed']) ? $data['processorFamilyCheckFailed'] : (bool)$data['processorFamilyCheckFailed'];
        }
        if (isset($data['processorSpeedCheckFailed'])) {
            $this->processorSpeedCheckFailed = is_bool($data['processorSpeedCheckFailed']) ? $data['processorSpeedCheckFailed'] : (bool)$data['processorSpeedCheckFailed'];
        }
        if (isset($data['ramCheckFailed'])) {
            $this->ramCheckFailed = is_bool($data['ramCheckFailed']) ? $data['ramCheckFailed'] : (bool)$data['ramCheckFailed'];
        }
        if (isset($data['secureBootCheckFailed'])) {
            $this->secureBootCheckFailed = is_bool($data['secureBootCheckFailed']) ? $data['secureBootCheckFailed'] : (bool)$data['secureBootCheckFailed'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['storageCheckFailed'])) {
            $this->storageCheckFailed = is_bool($data['storageCheckFailed']) ? $data['storageCheckFailed'] : (bool)$data['storageCheckFailed'];
        }
        if (isset($data['tenantAttached'])) {
            $this->tenantAttached = is_bool($data['tenantAttached']) ? $data['tenantAttached'] : (bool)$data['tenantAttached'];
        }
        if (isset($data['tpmCheckFailed'])) {
            $this->tpmCheckFailed = is_bool($data['tpmCheckFailed']) ? $data['tpmCheckFailed'] : (bool)$data['tpmCheckFailed'];
        }
        if (isset($data['upgradeEligibility'])) {
            $this->upgradeEligibility = is_array($data['upgradeEligibility']) ? new OperatingSystemUpgradeEligibility($data['upgradeEligibility']) : $data['upgradeEligibility'];
        }
        if (isset($data['windowsScore'])) {
            $this->windowsScore = is_numeric($data['windowsScore']) ? (float)$data['windowsScore'] : $data['windowsScore'];
        }
        if (isset($data['workFromAnywhereScore'])) {
            $this->workFromAnywhereScore = is_numeric($data['workFromAnywhereScore']) ? (float)$data['workFromAnywhereScore'] : $data['workFromAnywhereScore'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
