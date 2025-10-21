<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsCategory resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsCategory
     */

    /**
     * Select specific UserExperienceAnalyticsCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
