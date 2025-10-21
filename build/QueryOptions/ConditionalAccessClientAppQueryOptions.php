<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessClientApp resources
 *
 * Available select fields:
 */
class ConditionalAccessClientAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessClientApp
     */

    /**
     * Select specific ConditionalAccessClientApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
