<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
