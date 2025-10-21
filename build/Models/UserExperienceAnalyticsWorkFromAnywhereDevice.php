<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereDevice
 */
class UserExperienceAnalyticsWorkFromAnywhereDevice
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** When TRUE, indicates the intune device's autopilot profile is assigned. When FALSE, indicates it's not Assigned. Supports: $select, $OrderBy. Read-only. */
        public ?bool $autoPilotProfileAssigned = null,
        /** When TRUE, indicates the intune device's autopilot is registered. When FALSE, indicates it's not registered. Supports: $select, $OrderBy. Read-only. */
        public ?bool $autoPilotRegistered = null,
        /** The Azure Active Directory (Azure AD) device Id. Supports: $select, $OrderBy. Read-only. */
        public ?string $azureAdDeviceId = null,
        /** The work from anywhere device's Azure Active Directory (Azure AD) join type. Supports: $select, $OrderBy. Read-only. */
        public ?string $azureAdJoinType = null,
        /** When TRUE, indicates the device's Azure Active Directory (Azure AD) is registered. When False, indicates it's not registered. Supports: $select, $OrderBy. Read-only. */
        public ?bool $azureAdRegistered = null,
        /** Indicates per device cloud identity score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $cloudIdentityScore = null,
        /** Indicates per device cloud management score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $cloudManagementScore = null,
        /** Indicates per device cloud provisioning score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $cloudProvisioningScore = null,
        /** When TRUE, indicates the device's compliance policy is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only. */
        public ?bool $compliancePolicySetToIntune = null,
        /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceId = null,
        /** The name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceName = null,
        /**  */
        public ?string $healthStatus = null,
        /** When TRUE, indicates the device's Cloud Management Gateway for Configuration Manager is enabled. When FALSE, indicates it's not enabled. Supports: $select, $OrderBy. Read-only. */
        public ?bool $isCloudManagedGatewayEnabled = null,
        /** The management agent of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $managedBy = null,
        /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $manufacturer = null,
        /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $model = null,
        /** When TRUE, indicates OS check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $osCheckFailed = null,
        /** The OS description of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $osDescription = null,
        /** The OS version of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $osVersion = null,
        /** When TRUE, indicates the device's other workloads is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only. */
        public ?bool $otherWorkloadsSetToIntune = null,
        /** Ownership of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $ownership = null,
        /** When TRUE, indicates processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $processor64BitCheckFailed = null,
        /** When TRUE, indicates processor hardware core count check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $processorCoreCountCheckFailed = null,
        /** When TRUE, indicates processor hardware family check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $processorFamilyCheckFailed = null,
        /** When TRUE, indicates processor hardware speed check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $processorSpeedCheckFailed = null,
        /** When TRUE, indicates RAM hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $ramCheckFailed = null,
        /** When TRUE, indicates secure boot hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $secureBootCheckFailed = null,
        /** The serial number of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $serialNumber = null,
        /** When TRUE, indicates storage hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $storageCheckFailed = null,
        /** When TRUE, indicates the device is Tenant Attached. When FALSE, indicates it's not Tenant Attached. Supports: $select, $OrderBy. Read-only. */
        public ?bool $tenantAttached = null,
        /** When TRUE, indicates Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only. */
        public ?bool $tpmCheckFailed = null,
        /**  */
        public ?string $upgradeEligibility = null,
        /** Indicates per device windows score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $windowsScore = null,
        /** Indicates work from anywhere per device overall score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $workFromAnywhereScore = null
    ) {}
}
