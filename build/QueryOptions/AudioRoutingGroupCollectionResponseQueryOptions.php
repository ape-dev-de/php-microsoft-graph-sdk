<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AudioRoutingGroupCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AudioRoutingGroupCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AudioRoutingGroupCollectionResponse properties
     * 
     * @param array<string> $select Use AudioRoutingGroupCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
