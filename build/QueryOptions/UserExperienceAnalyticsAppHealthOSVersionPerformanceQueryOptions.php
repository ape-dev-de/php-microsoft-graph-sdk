<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthOSVersionPerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsAppHealthOSVersionPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthOSVersionPerformance
     */

    /**
     * Select specific UserExperienceAnalyticsAppHealthOSVersionPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
