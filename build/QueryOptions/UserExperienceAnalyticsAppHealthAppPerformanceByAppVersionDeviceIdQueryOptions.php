<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId resources
 *
 * Available select fields:
 * - appCrashCount
 * - appDisplayName
 * - appName
 * - appPublisher
 * - appVersion
 * - deviceDisplayName
 * - deviceId
 * - processedDateTime
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdQueryOptions extends QueryOptions
{
    public const FIELD_APP_CRASH_COUNT = 'appCrashCount';
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_NAME = 'appName';
    public const FIELD_APP_PUBLISHER = 'appPublisher';
    public const FIELD_APP_VERSION = 'appVersion';
    public const FIELD_DEVICE_DISPLAY_NAME = 'deviceDisplayName';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_PROCESSED_DATE_TIME = 'processedDateTime';

    /**
     * Select specific UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
