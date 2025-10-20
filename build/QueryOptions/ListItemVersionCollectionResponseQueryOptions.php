<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ListItemVersionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ListItemVersionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ListItemVersionCollectionResponse properties
     * 
     * @param array<string> $select Use ListItemVersionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
