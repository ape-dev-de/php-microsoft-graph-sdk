<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartListener resources
 *
 * Available select fields:
 * - handler
 */
class OnAttributeCollectionStartListenerQueryOptions extends QueryOptions
{
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnAttributeCollectionStartListener properties
     * 
     * @param array<string> $select Use OnAttributeCollectionStartListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
