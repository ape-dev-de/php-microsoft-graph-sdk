<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthApplicationPerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthApplicationPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthApplicationPerformance
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthApplicationPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
