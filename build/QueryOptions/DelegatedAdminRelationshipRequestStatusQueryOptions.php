<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipRequestStatus resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipRequestStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationshipRequestStatus
     */

    /**
     * Select specific DelegatedAdminRelationshipRequestStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
