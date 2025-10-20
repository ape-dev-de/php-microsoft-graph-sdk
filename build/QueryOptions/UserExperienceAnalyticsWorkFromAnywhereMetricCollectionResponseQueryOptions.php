<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsWorkFromAnywhereMetricCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
