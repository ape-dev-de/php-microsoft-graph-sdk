<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionSubmitListener resources
 *
 * Available select fields:
 * - handler
 */
class OnAttributeCollectionSubmitListenerQueryOptions extends QueryOptions
{
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnAttributeCollectionSubmitListener properties
     * 
     * @param array<string> $select Use OnAttributeCollectionSubmitListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
