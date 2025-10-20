<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDevicePerformanceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsAppHealthDevicePerformanceCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthDevicePerformanceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
