<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereModelPerformance resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsWorkFromAnywhereModelPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsWorkFromAnywhereModelPerformance
     */

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereModelPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
