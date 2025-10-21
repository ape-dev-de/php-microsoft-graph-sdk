<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Group resources
 *
 * Available select fields:
 */
class GroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Group
     */

    /**
     * Select specific Group properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
