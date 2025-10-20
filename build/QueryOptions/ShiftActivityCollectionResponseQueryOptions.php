<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftActivityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ShiftActivityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ShiftActivityCollectionResponse properties
     * 
     * @param array<string> $select Use ShiftActivityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
