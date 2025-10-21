<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsOperatingSystemRestartCategory resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsOperatingSystemRestartCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsOperatingSystemRestartCategory
     */

    /**
     * Select specific UserExperienceAnalyticsOperatingSystemRestartCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
