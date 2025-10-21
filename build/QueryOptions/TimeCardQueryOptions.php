<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCard resources
 *
 * Available select fields:
 */
class TimeCardQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeCard
     */

    /**
     * Select specific TimeCard properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
