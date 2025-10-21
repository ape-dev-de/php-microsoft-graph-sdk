<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsMetricHistory resources
 *
 * Available select fields:
 * - deviceId
 * - metricDateTime
 * - metricType
 */
class UserExperienceAnalyticsMetricHistoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsMetricHistory
     */
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_METRIC_DATE_TIME = 'metricDateTime';
    public const FIELD_METRIC_TYPE = 'metricType';

    /**
     * Select specific UserExperienceAnalyticsMetricHistory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
