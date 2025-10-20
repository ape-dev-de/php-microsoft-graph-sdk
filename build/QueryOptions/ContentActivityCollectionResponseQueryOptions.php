<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentActivityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ContentActivityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ContentActivityCollectionResponse properties
     * 
     * @param array<string> $select Use ContentActivityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
