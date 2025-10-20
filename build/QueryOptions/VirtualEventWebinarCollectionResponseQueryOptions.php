<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventWebinarCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventWebinarCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventWebinarCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventWebinarCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
