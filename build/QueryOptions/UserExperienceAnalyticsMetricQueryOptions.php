<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsMetric resources
 *
 * Available select fields:
 * - unit
 * - value
 */
class UserExperienceAnalyticsMetricQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsMetric
     */
    public const FIELD_UNIT = 'unit';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsMetric properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
