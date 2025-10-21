<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereDevicesSummary resources
 *
 * Available select fields:
 * - autopilotDevicesSummary
 * - cloudIdentityDevicesSummary
 * - cloudManagementDevicesSummary
 * - coManagedDevices
 * - devicesNotAutopilotRegistered
 * - devicesWithoutAutopilotProfileAssigned
 * - devicesWithoutCloudIdentity
 * - intuneDevices
 * - tenantAttachDevices
 * - totalDevices
 * - unsupportedOSversionDevices
 * - windows10Devices
 * - windows10DevicesSummary
 * - windows10DevicesWithoutTenantAttach
 */
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
     */
    public const FIELD_AUTOPILOT_DEVICES_SUMMARY = 'autopilotDevicesSummary';
    public const FIELD_CLOUD_IDENTITY_DEVICES_SUMMARY = 'cloudIdentityDevicesSummary';
    public const FIELD_CLOUD_MANAGEMENT_DEVICES_SUMMARY = 'cloudManagementDevicesSummary';
    public const FIELD_CO_MANAGED_DEVICES = 'coManagedDevices';
    public const FIELD_DEVICES_NOT_AUTOPILOT_REGISTERED = 'devicesNotAutopilotRegistered';
    public const FIELD_DEVICES_WITHOUT_AUTOPILOT_PROFILE_ASSIGNED = 'devicesWithoutAutopilotProfileAssigned';
    public const FIELD_DEVICES_WITHOUT_CLOUD_IDENTITY = 'devicesWithoutCloudIdentity';
    public const FIELD_INTUNE_DEVICES = 'intuneDevices';
    public const FIELD_TENANT_ATTACH_DEVICES = 'tenantAttachDevices';
    public const FIELD_TOTAL_DEVICES = 'totalDevices';
    public const FIELD_UNSUPPORTED_OSVERSION_DEVICES = 'unsupportedOSversionDevices';
    public const FIELD_WINDOWS10DEVICES = 'windows10Devices';
    public const FIELD_WINDOWS10DEVICES_SUMMARY = 'windows10DevicesSummary';
    public const FIELD_WINDOWS10DEVICES_WITHOUT_TENANT_ATTACH = 'windows10DevicesWithoutTenantAttach';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereDevicesSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
