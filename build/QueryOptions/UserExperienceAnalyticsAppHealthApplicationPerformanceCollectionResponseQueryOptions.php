<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthApplicationPerformanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsAppHealthApplicationPerformanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsAppHealthApplicationPerformanceCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthApplicationPerformanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
