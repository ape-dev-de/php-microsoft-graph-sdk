<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchEntity resources
 *
 * Available select fields:
 */
class SearchEntityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchEntity
     */

    /**
     * Select specific SearchEntity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
