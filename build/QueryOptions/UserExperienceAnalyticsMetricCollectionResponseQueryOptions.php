<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsMetricCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsMetricCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsMetricCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsMetricCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
