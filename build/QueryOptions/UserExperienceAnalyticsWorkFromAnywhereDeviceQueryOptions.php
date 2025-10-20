<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereDevice resources
 *
 * Available select fields:
 * - autoPilotProfileAssigned
 * - autoPilotRegistered
 * - azureAdDeviceId
 * - azureAdJoinType
 * - azureAdRegistered
 * - cloudIdentityScore
 * - cloudManagementScore
 * - cloudProvisioningScore
 * - compliancePolicySetToIntune
 * - deviceId
 * - deviceName
 * - healthStatus
 * - isCloudManagedGatewayEnabled
 * - managedBy
 * - manufacturer
 * - model
 * - osCheckFailed
 * - osDescription
 * - osVersion
 * - otherWorkloadsSetToIntune
 * - ownership
 * - processor64BitCheckFailed
 * - processorCoreCountCheckFailed
 * - processorFamilyCheckFailed
 * - processorSpeedCheckFailed
 * - ramCheckFailed
 * - secureBootCheckFailed
 * - serialNumber
 * - storageCheckFailed
 * - tenantAttached
 * - tpmCheckFailed
 * - upgradeEligibility
 * - windowsScore
 * - workFromAnywhereScore
 */
class UserExperienceAnalyticsWorkFromAnywhereDeviceQueryOptions extends QueryOptions
{
    public const FIELD_AUTO_PILOT_PROFILE_ASSIGNED = 'autoPilotProfileAssigned';
    public const FIELD_AUTO_PILOT_REGISTERED = 'autoPilotRegistered';
    public const FIELD_AZURE_AD_DEVICE_ID = 'azureAdDeviceId';
    public const FIELD_AZURE_AD_JOIN_TYPE = 'azureAdJoinType';
    public const FIELD_AZURE_AD_REGISTERED = 'azureAdRegistered';
    public const FIELD_CLOUD_IDENTITY_SCORE = 'cloudIdentityScore';
    public const FIELD_CLOUD_MANAGEMENT_SCORE = 'cloudManagementScore';
    public const FIELD_CLOUD_PROVISIONING_SCORE = 'cloudProvisioningScore';
    public const FIELD_COMPLIANCE_POLICY_SET_TO_INTUNE = 'compliancePolicySetToIntune';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_IS_CLOUD_MANAGED_GATEWAY_ENABLED = 'isCloudManagedGatewayEnabled';
    public const FIELD_MANAGED_BY = 'managedBy';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_OS_CHECK_FAILED = 'osCheckFailed';
    public const FIELD_OS_DESCRIPTION = 'osDescription';
    public const FIELD_OS_VERSION = 'osVersion';
    public const FIELD_OTHER_WORKLOADS_SET_TO_INTUNE = 'otherWorkloadsSetToIntune';
    public const FIELD_OWNERSHIP = 'ownership';
    public const FIELD_PROCESSOR64BIT_CHECK_FAILED = 'processor64BitCheckFailed';
    public const FIELD_PROCESSOR_CORE_COUNT_CHECK_FAILED = 'processorCoreCountCheckFailed';
    public const FIELD_PROCESSOR_FAMILY_CHECK_FAILED = 'processorFamilyCheckFailed';
    public const FIELD_PROCESSOR_SPEED_CHECK_FAILED = 'processorSpeedCheckFailed';
    public const FIELD_RAM_CHECK_FAILED = 'ramCheckFailed';
    public const FIELD_SECURE_BOOT_CHECK_FAILED = 'secureBootCheckFailed';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_STORAGE_CHECK_FAILED = 'storageCheckFailed';
    public const FIELD_TENANT_ATTACHED = 'tenantAttached';
    public const FIELD_TPM_CHECK_FAILED = 'tpmCheckFailed';
    public const FIELD_UPGRADE_ELIGIBILITY = 'upgradeEligibility';
    public const FIELD_WINDOWS_SCORE = 'windowsScore';
    public const FIELD_WORK_FROM_ANYWHERE_SCORE = 'workFromAnywhereScore';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereDevice properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsWorkFromAnywhereDeviceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
