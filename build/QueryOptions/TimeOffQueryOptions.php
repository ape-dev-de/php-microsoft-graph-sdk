<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOff resources
 *
 * Available select fields:
 */
class TimeOffQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeOff
     */

    /**
     * Select specific TimeOff properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
