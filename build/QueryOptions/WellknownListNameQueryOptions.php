<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WellknownListName resources
 *
 * Available select fields:
 */
class WellknownListNameQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WellknownListName
     */

    /**
     * Select specific WellknownListName properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
