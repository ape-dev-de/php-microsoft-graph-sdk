<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IntegerRangeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IntegerRangeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IntegerRangeCollectionResponse properties
     * 
     * @param array<string> $select Use IntegerRangeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
