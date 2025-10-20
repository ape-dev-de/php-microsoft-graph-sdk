<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsBaselineCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsBaselineCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsBaselineCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsBaselineCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
