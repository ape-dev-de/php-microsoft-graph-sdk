<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NamedLocationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class NamedLocationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific NamedLocationCollectionResponse properties
     * 
     * @param array<string> $select Use NamedLocationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
