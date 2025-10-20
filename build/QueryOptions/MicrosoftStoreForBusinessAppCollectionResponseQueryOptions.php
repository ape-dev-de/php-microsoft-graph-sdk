<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftStoreForBusinessAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MicrosoftStoreForBusinessAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MicrosoftStoreForBusinessAppCollectionResponse properties
     * 
     * @param array<string> $select Use MicrosoftStoreForBusinessAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
