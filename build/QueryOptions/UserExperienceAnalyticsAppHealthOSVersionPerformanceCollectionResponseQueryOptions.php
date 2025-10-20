<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthOSVersionPerformanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsAppHealthOSVersionPerformanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsAppHealthOSVersionPerformanceCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthOSVersionPerformanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
