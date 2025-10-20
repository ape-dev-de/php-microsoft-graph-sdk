<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventTownhallCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventTownhallCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventTownhallCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventTownhallCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
