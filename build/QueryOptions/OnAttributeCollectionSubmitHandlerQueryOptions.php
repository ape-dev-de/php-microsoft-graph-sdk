<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionSubmitHandler resources
 *
 * Available select fields:
 */
class OnAttributeCollectionSubmitHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionSubmitHandler
     */

    /**
     * Select specific OnAttributeCollectionSubmitHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
