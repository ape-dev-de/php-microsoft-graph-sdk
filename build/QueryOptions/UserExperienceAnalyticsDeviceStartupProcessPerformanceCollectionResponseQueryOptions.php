<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupProcessPerformanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsDeviceStartupProcessPerformanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupProcessPerformanceCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDeviceStartupProcessPerformanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
