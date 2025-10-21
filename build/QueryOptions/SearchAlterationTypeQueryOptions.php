<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAlterationType resources
 *
 * Available select fields:
 */
class SearchAlterationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchAlterationType
     */

    /**
     * Select specific SearchAlterationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
