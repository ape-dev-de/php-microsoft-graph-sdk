<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupRelationships resources
 *
 * Available select fields:
 */
class PrivilegedAccessGroupRelationshipsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrivilegedAccessGroupRelationships
     */

    /**
     * Select specific PrivilegedAccessGroupRelationships properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
