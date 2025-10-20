<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsModelScores resources
 *
 * Available select fields:
 * - appReliabilityScore
 * - batteryHealthScore
 * - endpointAnalyticsScore
 * - healthStatus
 * - manufacturer
 * - model
 * - modelDeviceCount
 * - startupPerformanceScore
 * - workFromAnywhereScore
 */
class UserExperienceAnalyticsModelScoresQueryOptions extends QueryOptions
{
    public const FIELD_APP_RELIABILITY_SCORE = 'appReliabilityScore';
    public const FIELD_BATTERY_HEALTH_SCORE = 'batteryHealthScore';
    public const FIELD_ENDPOINT_ANALYTICS_SCORE = 'endpointAnalyticsScore';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_MODEL_DEVICE_COUNT = 'modelDeviceCount';
    public const FIELD_STARTUP_PERFORMANCE_SCORE = 'startupPerformanceScore';
    public const FIELD_WORK_FROM_ANYWHERE_SCORE = 'workFromAnywhereScore';

    /**
     * Select specific UserExperienceAnalyticsModelScores properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsModelScoresQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
