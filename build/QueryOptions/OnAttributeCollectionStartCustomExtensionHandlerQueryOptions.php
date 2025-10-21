<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartCustomExtensionHandler resources
 *
 * Available select fields:
 */
class OnAttributeCollectionStartCustomExtensionHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionStartCustomExtensionHandler
     */

    /**
     * Select specific OnAttributeCollectionStartCustomExtensionHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
