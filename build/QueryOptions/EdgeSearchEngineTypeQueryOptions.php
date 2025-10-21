<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EdgeSearchEngineType resources
 *
 * Available select fields:
 */
class EdgeSearchEngineTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EdgeSearchEngineType
     */

    /**
     * Select specific EdgeSearchEngineType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
