<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreLocalizedDescriptionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreLocalizedDescriptionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreLocalizedDescriptionCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreLocalizedDescriptionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
