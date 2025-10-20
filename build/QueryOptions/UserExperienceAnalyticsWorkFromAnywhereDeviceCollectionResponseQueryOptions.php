<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereDeviceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsWorkFromAnywhereDeviceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereDeviceCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsWorkFromAnywhereDeviceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
