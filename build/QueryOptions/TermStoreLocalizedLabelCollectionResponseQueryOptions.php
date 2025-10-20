<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreLocalizedLabelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TermStoreLocalizedLabelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TermStoreLocalizedLabelCollectionResponse properties
     * 
     * @param array<string> $select Use TermStoreLocalizedLabelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
