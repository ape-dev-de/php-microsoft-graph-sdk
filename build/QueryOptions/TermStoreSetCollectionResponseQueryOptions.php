<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreSetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreSetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreSetCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreSetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
