<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IpRangeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IpRangeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IpRangeCollectionResponse properties
     * 
     * @param array<string> $select Use IpRangeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
