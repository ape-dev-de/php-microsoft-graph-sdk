<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion resources
 *
 * Available select fields:
 * - activeDeviceCount
 * - appCrashCount
 * - appDisplayName
 * - appName
 * - appPublisher
 * - appUsageDuration
 * - meanTimeToFailureInMinutes
 * - osBuildNumber
 * - osVersion
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
     */
    public const FIELD_ACTIVE_DEVICE_COUNT = 'activeDeviceCount';
    public const FIELD_APP_CRASH_COUNT = 'appCrashCount';
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_NAME = 'appName';
    public const FIELD_APP_PUBLISHER = 'appPublisher';
    public const FIELD_APP_USAGE_DURATION = 'appUsageDuration';
    public const FIELD_MEAN_TIME_TO_FAILURE_IN_MINUTES = 'meanTimeToFailureInMinutes';
    public const FIELD_OS_BUILD_NUMBER = 'osBuildNumber';
    public const FIELD_OS_VERSION = 'osVersion';

    /**
     * Select specific UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
