<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhysicalOfficeAddressCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PhysicalOfficeAddressCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PhysicalOfficeAddressCollectionResponse properties
     * 
     * @param array<string> $select Use PhysicalOfficeAddressCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
