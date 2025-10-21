<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartListener resources
 *
 * Available select fields:
 */
class OnAttributeCollectionStartListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionStartListener
     */

    /**
     * Select specific OnAttributeCollectionStartListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
