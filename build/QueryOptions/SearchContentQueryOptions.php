<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchContent resources
 *
 * Available select fields:
 */
class SearchContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchContent
     */

    /**
     * Select specific SearchContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
