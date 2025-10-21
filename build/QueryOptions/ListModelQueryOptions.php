<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ListModel resources
 *
 * Available select fields:
 */
class ListModelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ListModel
     */

    /**
     * Select specific ListModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
