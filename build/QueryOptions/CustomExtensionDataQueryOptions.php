<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionData resources
 *
 * Available select fields:
 */
class CustomExtensionDataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionData
     */

    /**
     * Select specific CustomExtensionData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
