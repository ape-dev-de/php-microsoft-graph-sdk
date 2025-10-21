<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDeviceModelPerformance resources
 *
 * Available select fields:
 * - activeDeviceCount
 * - deviceManufacturer
 * - deviceModel
 * - healthStatus
 * - meanTimeToFailureInMinutes
 * - modelAppHealthScore
 */
class UserExperienceAnalyticsAppHealthDeviceModelPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthDeviceModelPerformance
     */
    public const FIELD_ACTIVE_DEVICE_COUNT = 'activeDeviceCount';
    public const FIELD_DEVICE_MANUFACTURER = 'deviceManufacturer';
    public const FIELD_DEVICE_MODEL = 'deviceModel';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_MEAN_TIME_TO_FAILURE_IN_MINUTES = 'meanTimeToFailureInMinutes';
    public const FIELD_MODEL_APP_HEALTH_SCORE = 'modelAppHealthScore';

    /**
     * Select specific UserExperienceAnalyticsAppHealthDeviceModelPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
