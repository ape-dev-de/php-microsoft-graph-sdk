<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EventMessageRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EventMessageRequestCollectionResponse properties
     * 
     * @param array<string> $select Use EventMessageRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
