<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreLocalizedNameCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreLocalizedNameCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreLocalizedNameCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreLocalizedNameCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
