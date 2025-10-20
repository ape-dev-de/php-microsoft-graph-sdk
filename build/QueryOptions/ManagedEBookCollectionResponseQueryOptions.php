<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedEBookCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedEBookCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedEBookCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedEBookCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
