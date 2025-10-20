<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsMetricHistoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsMetricHistoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsMetricHistoryCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsMetricHistoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
