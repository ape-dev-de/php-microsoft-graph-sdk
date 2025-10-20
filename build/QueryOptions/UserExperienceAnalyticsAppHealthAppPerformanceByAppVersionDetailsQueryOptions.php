<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails resources
 *
 * Available select fields:
 * - appCrashCount
 * - appDisplayName
 * - appName
 * - appPublisher
 * - appVersion
 * - deviceCountWithCrashes
 * - isLatestUsedVersion
 * - isMostUsedVersion
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsQueryOptions extends QueryOptions
{
    public const FIELD_APP_CRASH_COUNT = 'appCrashCount';
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_NAME = 'appName';
    public const FIELD_APP_PUBLISHER = 'appPublisher';
    public const FIELD_APP_VERSION = 'appVersion';
    public const FIELD_DEVICE_COUNT_WITH_CRASHES = 'deviceCountWithCrashes';
    public const FIELD_IS_LATEST_USED_VERSION = 'isLatestUsedVersion';
    public const FIELD_IS_MOST_USED_VERSION = 'isMostUsedVersion';

    /**
     * Select specific UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
