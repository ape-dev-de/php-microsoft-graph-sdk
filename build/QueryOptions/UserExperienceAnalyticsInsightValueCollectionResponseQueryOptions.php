<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsInsightValueCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsInsightValueCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsInsightValueCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsInsightValueCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
