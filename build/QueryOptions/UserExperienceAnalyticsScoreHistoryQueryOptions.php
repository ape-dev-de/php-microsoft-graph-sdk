<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsScoreHistory resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsScoreHistoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsScoreHistory
     */

    /**
     * Select specific UserExperienceAnalyticsScoreHistory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
