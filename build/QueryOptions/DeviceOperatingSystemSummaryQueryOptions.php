<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceOperatingSystemSummary resources
 *
 * Available select fields:
 * - androidCorporateWorkProfileCount
 * - androidCount
 * - androidDedicatedCount
 * - androidDeviceAdminCount
 * - androidFullyManagedCount
 * - androidWorkProfileCount
 * - configMgrDeviceCount
 * - iosCount
 * - macOSCount
 * - unknownCount
 * - windowsCount
 * - windowsMobileCount
 */
class DeviceOperatingSystemSummaryQueryOptions extends QueryOptions
{
    public const FIELD_ANDROID_CORPORATE_WORK_PROFILE_COUNT = 'androidCorporateWorkProfileCount';
    public const FIELD_ANDROID_COUNT = 'androidCount';
    public const FIELD_ANDROID_DEDICATED_COUNT = 'androidDedicatedCount';
    public const FIELD_ANDROID_DEVICE_ADMIN_COUNT = 'androidDeviceAdminCount';
    public const FIELD_ANDROID_FULLY_MANAGED_COUNT = 'androidFullyManagedCount';
    public const FIELD_ANDROID_WORK_PROFILE_COUNT = 'androidWorkProfileCount';
    public const FIELD_CONFIG_MGR_DEVICE_COUNT = 'configMgrDeviceCount';
    public const FIELD_IOS_COUNT = 'iosCount';
    public const FIELD_MAC_OSCOUNT = 'macOSCount';
    public const FIELD_UNKNOWN_COUNT = 'unknownCount';
    public const FIELD_WINDOWS_COUNT = 'windowsCount';
    public const FIELD_WINDOWS_MOBILE_COUNT = 'windowsMobileCount';

    /**
     * Select specific DeviceOperatingSystemSummary properties
     * 
     * @param array<string> $select Use DeviceOperatingSystemSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
