<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsCategoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsCategoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsCategoryCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsCategoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
