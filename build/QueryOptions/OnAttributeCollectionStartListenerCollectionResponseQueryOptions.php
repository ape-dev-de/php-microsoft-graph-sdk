<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnAttributeCollectionStartListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnAttributeCollectionStartListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnAttributeCollectionStartListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
