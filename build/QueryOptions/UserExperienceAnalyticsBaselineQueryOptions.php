<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsBaseline resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsBaselineQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsBaseline
     */

    /**
     * Select specific UserExperienceAnalyticsBaseline properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
