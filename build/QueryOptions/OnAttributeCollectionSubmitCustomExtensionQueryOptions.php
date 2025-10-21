<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionSubmitCustomExtension resources
 *
 * Available select fields:
 */
class OnAttributeCollectionSubmitCustomExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionSubmitCustomExtension
     */

    /**
     * Select specific OnAttributeCollectionSubmitCustomExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
