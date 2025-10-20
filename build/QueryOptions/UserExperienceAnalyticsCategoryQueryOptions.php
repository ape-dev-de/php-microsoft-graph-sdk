<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsCategory resources
 *
 * Available select fields:
 * - insights
 * - metricValues
 */
class UserExperienceAnalyticsCategoryQueryOptions extends QueryOptions
{
    public const FIELD_INSIGHTS = 'insights';
    public const FIELD_METRIC_VALUES = 'metricValues';

    /**
     * Select specific UserExperienceAnalyticsCategory properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsCategoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
