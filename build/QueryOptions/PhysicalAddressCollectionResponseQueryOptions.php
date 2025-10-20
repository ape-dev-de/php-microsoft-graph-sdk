<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhysicalAddressCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PhysicalAddressCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PhysicalAddressCollectionResponse properties
     * 
     * @param array<string> $select Use PhysicalAddressCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
