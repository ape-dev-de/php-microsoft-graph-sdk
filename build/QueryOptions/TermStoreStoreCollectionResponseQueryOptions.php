<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreStoreCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreStoreCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreStoreCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreStoreCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
