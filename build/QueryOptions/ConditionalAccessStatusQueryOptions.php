<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessStatus resources
 *
 * Available select fields:
 */
class ConditionalAccessStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessStatus
     */

    /**
     * Select specific ConditionalAccessStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
