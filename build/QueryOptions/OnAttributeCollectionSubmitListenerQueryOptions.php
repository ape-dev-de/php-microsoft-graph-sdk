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
    /**
     * Available select fields for OnAttributeCollectionSubmitListener
     */
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnAttributeCollectionSubmitListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
