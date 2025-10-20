<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionSubmitListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnAttributeCollectionSubmitListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnAttributeCollectionSubmitListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnAttributeCollectionSubmitListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
