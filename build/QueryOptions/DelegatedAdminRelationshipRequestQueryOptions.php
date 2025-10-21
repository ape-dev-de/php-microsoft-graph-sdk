<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipRequest resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationshipRequest
     */

    /**
     * Select specific DelegatedAdminRelationshipRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
