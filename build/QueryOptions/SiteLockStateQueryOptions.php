<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SiteLockState resources
 *
 * Available select fields:
 */
class SiteLockStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SiteLockState
     */

    /**
     * Select specific SiteLockState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
