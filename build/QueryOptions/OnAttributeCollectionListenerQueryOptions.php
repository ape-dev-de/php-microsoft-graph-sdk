<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionListener resources
 *
 * Available select fields:
 */
class OnAttributeCollectionListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionListener
     */

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
