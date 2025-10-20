<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreGroupCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreGroupCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreGroupCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreGroupCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
