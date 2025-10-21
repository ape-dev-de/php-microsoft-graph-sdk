<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupMemberType resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupMemberTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupMemberType
     */

    /**
     * Select specific PrivilegedAccessGroupMemberType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
