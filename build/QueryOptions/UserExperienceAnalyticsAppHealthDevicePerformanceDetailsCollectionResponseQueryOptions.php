<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsAppHealthDevicePerformanceDetailsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
