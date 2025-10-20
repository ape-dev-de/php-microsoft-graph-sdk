<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionListener resources
 *
 * Available select fields:
 * - handler
 */
class OnAttributeCollectionListenerQueryOptions extends QueryOptions
{
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnAttributeCollectionListener properties
     * 
     * @param array<string> $select Use OnAttributeCollectionListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
