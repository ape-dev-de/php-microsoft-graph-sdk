<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsHealthState resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsHealthStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsHealthState
     */

    /**
     * Select specific UserExperienceAnalyticsHealthState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
