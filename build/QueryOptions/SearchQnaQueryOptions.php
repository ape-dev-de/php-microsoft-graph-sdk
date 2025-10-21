<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchQna resources
 *
 * Available select fields:
 */
class SearchQnaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchQna
     */

    /**
     * Select specific SearchQna properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
