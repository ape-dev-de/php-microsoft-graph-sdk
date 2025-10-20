<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnInteractiveAuthFlowStartListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnInteractiveAuthFlowStartListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnInteractiveAuthFlowStartListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnInteractiveAuthFlowStartListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
