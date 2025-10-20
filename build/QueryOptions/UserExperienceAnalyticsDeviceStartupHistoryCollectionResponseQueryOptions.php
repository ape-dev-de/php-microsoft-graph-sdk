<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupHistoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsDeviceStartupHistoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupHistoryCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDeviceStartupHistoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
