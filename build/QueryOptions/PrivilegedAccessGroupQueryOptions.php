<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroup resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroup
     */

    /**
     * Select specific PrivilegedAccessGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
