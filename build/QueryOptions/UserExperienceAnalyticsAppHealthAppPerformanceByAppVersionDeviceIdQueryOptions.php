<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
