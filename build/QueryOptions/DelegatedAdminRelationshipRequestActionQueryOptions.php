<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipRequestAction resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipRequestActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationshipRequestAction
     */

    /**
     * Select specific DelegatedAdminRelationshipRequestAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
