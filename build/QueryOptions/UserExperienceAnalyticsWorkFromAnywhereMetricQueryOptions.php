<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereMetric resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsWorkFromAnywhereMetricQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsWorkFromAnywhereMetric
     */

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereMetric properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
