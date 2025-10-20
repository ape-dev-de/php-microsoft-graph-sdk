<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedDeviceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedDeviceCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedDeviceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
