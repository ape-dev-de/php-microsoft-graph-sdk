<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterMode resources
 *
 * Available select fields:
 */
class FilterModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FilterMode
     */

    /**
     * Select specific FilterMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
