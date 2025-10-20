<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessageResponseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EventMessageResponseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EventMessageResponseCollectionResponse properties
     * 
     * @param array<string> $select Use EventMessageResponseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
