<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppStatus resources
 *
 * Available select fields:
 */
class ManagedAppStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppStatus
     */

    /**
     * Select specific ManagedAppStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
