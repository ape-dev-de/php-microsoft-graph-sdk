<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ListItem resources
 *
 * Available select fields:
 */
class ListItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ListItem
     */

    /**
     * Select specific ListItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
