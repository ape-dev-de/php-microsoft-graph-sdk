<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsBaseline resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - isBuiltIn
 * - appHealthMetrics
 * - batteryHealthMetrics
 * - bestPracticesMetrics
 * - deviceBootPerformanceMetrics
 * - rebootAnalyticsMetrics
 * - resourcePerformanceMetrics
 * - workFromAnywhereMetrics
 */
class UserExperienceAnalyticsBaselineQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsBaseline
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_BUILT_IN = 'isBuiltIn';
    public const FIELD_APP_HEALTH_METRICS = 'appHealthMetrics';
    public const FIELD_BATTERY_HEALTH_METRICS = 'batteryHealthMetrics';
    public const FIELD_BEST_PRACTICES_METRICS = 'bestPracticesMetrics';
    public const FIELD_DEVICE_BOOT_PERFORMANCE_METRICS = 'deviceBootPerformanceMetrics';
    public const FIELD_REBOOT_ANALYTICS_METRICS = 'rebootAnalyticsMetrics';
    public const FIELD_RESOURCE_PERFORMANCE_METRICS = 'resourcePerformanceMetrics';
    public const FIELD_WORK_FROM_ANYWHERE_METRICS = 'workFromAnywhereMetrics';

    /**
     * Select specific UserExperienceAnalyticsBaseline properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
