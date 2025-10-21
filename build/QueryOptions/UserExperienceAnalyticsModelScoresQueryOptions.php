<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsModelScores resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsModelScoresQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsModelScores
     */

    /**
     * Select specific UserExperienceAnalyticsModelScores properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
