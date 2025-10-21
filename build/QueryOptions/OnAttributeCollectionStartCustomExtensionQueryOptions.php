<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionStartCustomExtension resources
 *
 * Available select fields:
 */
class OnAttributeCollectionStartCustomExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionStartCustomExtension
     */

    /**
     * Select specific OnAttributeCollectionStartCustomExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
