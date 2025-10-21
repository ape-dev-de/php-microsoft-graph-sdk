<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceScores resources
 *
 * Available select fields:
 * - appReliabilityScore
 * - batteryHealthScore
 * - deviceName
 * - endpointAnalyticsScore
 * - healthStatus
 * - manufacturer
 * - model
 * - startupPerformanceScore
 * - workFromAnywhereScore
 */
class UserExperienceAnalyticsDeviceScoresQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDeviceScores
     */
    public const FIELD_APP_RELIABILITY_SCORE = 'appReliabilityScore';
    public const FIELD_BATTERY_HEALTH_SCORE = 'batteryHealthScore';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_ENDPOINT_ANALYTICS_SCORE = 'endpointAnalyticsScore';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_STARTUP_PERFORMANCE_SCORE = 'startupPerformanceScore';
    public const FIELD_WORK_FROM_ANYWHERE_SCORE = 'workFromAnywhereScore';

    /**
     * Select specific UserExperienceAnalyticsDeviceScores properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
