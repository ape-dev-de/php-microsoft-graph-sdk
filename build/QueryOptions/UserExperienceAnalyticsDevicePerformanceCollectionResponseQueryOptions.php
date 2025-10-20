<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDevicePerformanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsDevicePerformanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsDevicePerformanceCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDevicePerformanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
