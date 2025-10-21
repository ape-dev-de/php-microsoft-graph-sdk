<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
