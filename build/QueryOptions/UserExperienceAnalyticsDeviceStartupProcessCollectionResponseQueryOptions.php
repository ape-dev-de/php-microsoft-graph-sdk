<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupProcessCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsDeviceStartupProcessCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupProcessCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDeviceStartupProcessCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
