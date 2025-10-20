<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreRelationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreRelationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreRelationCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreRelationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
