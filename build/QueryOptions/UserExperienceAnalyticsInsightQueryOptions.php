<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsInsight resources
 *
 * Available select fields:
 * - insightId
 * - severity
 * - userExperienceAnalyticsMetricId
 * - values
 */
class UserExperienceAnalyticsInsightQueryOptions extends QueryOptions
{
    public const FIELD_INSIGHT_ID = 'insightId';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_USER_EXPERIENCE_ANALYTICS_METRIC_ID = 'userExperienceAnalyticsMetricId';
    public const FIELD_VALUES = 'values';

    /**
     * Select specific UserExperienceAnalyticsInsight properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsInsightQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
