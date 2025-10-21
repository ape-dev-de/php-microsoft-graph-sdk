<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostTracker resources
 *
 * Available select fields:
 */
class SecurityHostTrackerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostTracker
     */

    /**
     * Select specific SecurityHostTracker properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
