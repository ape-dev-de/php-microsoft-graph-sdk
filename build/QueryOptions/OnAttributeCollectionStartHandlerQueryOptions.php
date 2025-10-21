<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartHandler resources
 *
 * Available select fields:
 */
class OnAttributeCollectionStartHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionStartHandler
     */

    /**
     * Select specific OnAttributeCollectionStartHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
