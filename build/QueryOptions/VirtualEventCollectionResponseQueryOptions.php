<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
