<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IpNamedLocationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IpNamedLocationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IpNamedLocationCollectionResponse properties
     * 
     * @param array<string> $select Use IpNamedLocationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
