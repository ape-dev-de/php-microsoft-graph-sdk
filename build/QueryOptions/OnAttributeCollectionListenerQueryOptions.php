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
    /**
     * Available select fields for OnAttributeCollectionListener
     */
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnAttributeCollectionListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
