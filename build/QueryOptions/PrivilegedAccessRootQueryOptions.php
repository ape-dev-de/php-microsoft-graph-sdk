<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessRoot resources
 *
 * Available select fields:
 */
class PrivilegedAccessRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessRoot
     */

    /**
     * Select specific PrivilegedAccessRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
