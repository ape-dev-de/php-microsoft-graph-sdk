<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDevicePerformance resources
 *
 * Available select fields:
 * - appCrashCount
 * - appHangCount
 * - crashedAppCount
 * - deviceAppHealthScore
 * - deviceDisplayName
 * - deviceId
 * - deviceManufacturer
 * - deviceModel
 * - healthStatus
 * - meanTimeToFailureInMinutes
 * - processedDateTime
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthDevicePerformance
     */
    public const FIELD_APP_CRASH_COUNT = 'appCrashCount';
    public const FIELD_APP_HANG_COUNT = 'appHangCount';
    public const FIELD_CRASHED_APP_COUNT = 'crashedAppCount';
    public const FIELD_DEVICE_APP_HEALTH_SCORE = 'deviceAppHealthScore';
    public const FIELD_DEVICE_DISPLAY_NAME = 'deviceDisplayName';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_MANUFACTURER = 'deviceManufacturer';
    public const FIELD_DEVICE_MODEL = 'deviceModel';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_MEAN_TIME_TO_FAILURE_IN_MINUTES = 'meanTimeToFailureInMinutes';
    public const FIELD_PROCESSED_DATE_TIME = 'processedDateTime';

    /**
     * Select specific UserExperienceAnalyticsAppHealthDevicePerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
