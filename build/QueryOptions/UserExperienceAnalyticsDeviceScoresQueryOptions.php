<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceScores resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsDeviceScoresQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDeviceScores
     */

    /**
     * Select specific UserExperienceAnalyticsDeviceScores properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
