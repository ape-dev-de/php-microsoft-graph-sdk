<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthOSVersionPerformance resources
 *
 * Available select fields:
 * - activeDeviceCount
 * - meanTimeToFailureInMinutes
 * - osBuildNumber
 * - osVersion
 * - osVersionAppHealthScore
 */
class UserExperienceAnalyticsAppHealthOSVersionPerformanceQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVE_DEVICE_COUNT = 'activeDeviceCount';
    public const FIELD_MEAN_TIME_TO_FAILURE_IN_MINUTES = 'meanTimeToFailureInMinutes';
    public const FIELD_OS_BUILD_NUMBER = 'osBuildNumber';
    public const FIELD_OS_VERSION = 'osVersion';
    public const FIELD_OS_VERSION_APP_HEALTH_SCORE = 'osVersionAppHealthScore';

    /**
     * Select specific UserExperienceAnalyticsAppHealthOSVersionPerformance properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthOSVersionPerformanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
