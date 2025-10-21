<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Extension resources
 *
 * Available select fields:
 */
class ExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Extension
     */

    /**
     * Select specific Extension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
