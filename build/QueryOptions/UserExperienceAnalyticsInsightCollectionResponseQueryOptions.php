<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsInsightCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsInsightCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsInsightCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsInsightCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
