<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessRoot resources
 *
 * Available select fields:
 */
class ConditionalAccessRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessRoot
     */

    /**
     * Select specific ConditionalAccessRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
