<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EdgeSearchEngineCustom resources
 *
 * Available select fields:
 */
class EdgeSearchEngineCustomQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EdgeSearchEngineCustom
     */

    /**
     * Select specific EdgeSearchEngineCustom properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
