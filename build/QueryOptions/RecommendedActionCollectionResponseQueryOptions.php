<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecommendedActionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RecommendedActionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RecommendedActionCollectionResponse properties
     * 
     * @param array<string> $select Use RecommendedActionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
