<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric resources
 *
 * Available select fields:
 * - osCheckFailedPercentage
 * - processor64BitCheckFailedPercentage
 * - processorCoreCountCheckFailedPercentage
 * - processorFamilyCheckFailedPercentage
 * - processorSpeedCheckFailedPercentage
 * - ramCheckFailedPercentage
 * - secureBootCheckFailedPercentage
 * - storageCheckFailedPercentage
 * - totalDeviceCount
 * - tpmCheckFailedPercentage
 * - upgradeEligibleDeviceCount
 */
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricQueryOptions extends QueryOptions
{
    public const FIELD_OS_CHECK_FAILED_PERCENTAGE = 'osCheckFailedPercentage';
    public const FIELD_PROCESSOR64BIT_CHECK_FAILED_PERCENTAGE = 'processor64BitCheckFailedPercentage';
    public const FIELD_PROCESSOR_CORE_COUNT_CHECK_FAILED_PERCENTAGE = 'processorCoreCountCheckFailedPercentage';
    public const FIELD_PROCESSOR_FAMILY_CHECK_FAILED_PERCENTAGE = 'processorFamilyCheckFailedPercentage';
    public const FIELD_PROCESSOR_SPEED_CHECK_FAILED_PERCENTAGE = 'processorSpeedCheckFailedPercentage';
    public const FIELD_RAM_CHECK_FAILED_PERCENTAGE = 'ramCheckFailedPercentage';
    public const FIELD_SECURE_BOOT_CHECK_FAILED_PERCENTAGE = 'secureBootCheckFailedPercentage';
    public const FIELD_STORAGE_CHECK_FAILED_PERCENTAGE = 'storageCheckFailedPercentage';
    public const FIELD_TOTAL_DEVICE_COUNT = 'totalDeviceCount';
    public const FIELD_TPM_CHECK_FAILED_PERCENTAGE = 'tpmCheckFailedPercentage';
    public const FIELD_UPGRADE_ELIGIBLE_DEVICE_COUNT = 'upgradeEligibleDeviceCount';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
