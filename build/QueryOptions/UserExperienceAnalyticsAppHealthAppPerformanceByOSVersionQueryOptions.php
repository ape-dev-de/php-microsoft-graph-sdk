<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
     */

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
