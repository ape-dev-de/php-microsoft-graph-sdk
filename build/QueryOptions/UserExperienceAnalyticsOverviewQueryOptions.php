<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsOverview resources
 *
 * Available select fields:
 * - insights
 */
class UserExperienceAnalyticsOverviewQueryOptions extends QueryOptions
{
    public const FIELD_INSIGHTS = 'insights';

    /**
     * Select specific UserExperienceAnalyticsOverview properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsOverviewQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
