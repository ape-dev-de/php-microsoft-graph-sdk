<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupType resources
 *
 * Available select fields:
 */
class GroupTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupType
     */

    /**
     * Select specific GroupType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
