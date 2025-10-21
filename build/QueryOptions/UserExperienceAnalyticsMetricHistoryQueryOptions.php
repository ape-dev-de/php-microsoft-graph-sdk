<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsMetricHistory resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsMetricHistoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsMetricHistory
     */

    /**
     * Select specific UserExperienceAnalyticsMetricHistory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
