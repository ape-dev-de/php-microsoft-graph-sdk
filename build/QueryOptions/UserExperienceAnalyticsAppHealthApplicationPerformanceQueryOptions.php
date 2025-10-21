<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthApplicationPerformance resources
 *
 * Available select fields:
 * - activeDeviceCount
 * - appCrashCount
 * - appDisplayName
 * - appHangCount
 * - appHealthScore
 * - appName
 * - appPublisher
 * - appUsageDuration
 * - meanTimeToFailureInMinutes
 */
class UserExperienceAnalyticsAppHealthApplicationPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthApplicationPerformance
     */
    public const FIELD_ACTIVE_DEVICE_COUNT = 'activeDeviceCount';
    public const FIELD_APP_CRASH_COUNT = 'appCrashCount';
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_HANG_COUNT = 'appHangCount';
    public const FIELD_APP_HEALTH_SCORE = 'appHealthScore';
    public const FIELD_APP_NAME = 'appName';
    public const FIELD_APP_PUBLISHER = 'appPublisher';
    public const FIELD_APP_USAGE_DURATION = 'appUsageDuration';
    public const FIELD_MEAN_TIME_TO_FAILURE_IN_MINUTES = 'meanTimeToFailureInMinutes';

    /**
     * Select specific UserExperienceAnalyticsAppHealthApplicationPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
