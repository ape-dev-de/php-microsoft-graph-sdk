<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCardState resources
 *
 * Available select fields:
 */
class TimeCardStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeCardState
     */

    /**
     * Select specific TimeCardState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
