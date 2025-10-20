<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LinkedResourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LinkedResourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LinkedResourceCollectionResponse properties
     * 
     * @param array<string> $select Use LinkedResourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
