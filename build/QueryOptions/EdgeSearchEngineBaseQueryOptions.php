<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EdgeSearchEngineBase resources
 *
 * Available select fields:
 */
class EdgeSearchEngineBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EdgeSearchEngineBase
     */

    /**
     * Select specific EdgeSearchEngineBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
