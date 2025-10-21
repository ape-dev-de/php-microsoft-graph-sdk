<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereMetric resources
 *
 * Available select fields:
 * - metricDevices
 */
class UserExperienceAnalyticsWorkFromAnywhereMetricQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsWorkFromAnywhereMetric
     */
    public const FIELD_METRIC_DEVICES = 'metricDevices';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereMetric properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
