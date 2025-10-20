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
    public const FIELD_METRIC_DEVICES = 'metricDevices';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereMetric properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsWorkFromAnywhereMetricQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
