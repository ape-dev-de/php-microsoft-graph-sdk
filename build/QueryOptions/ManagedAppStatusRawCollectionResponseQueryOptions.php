<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppStatusRawCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedAppStatusRawCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedAppStatusRawCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedAppStatusRawCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
