<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminRelationshipStatus resources
 *
 * Available select fields:
 */
class DelegatedAdminRelationshipStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminRelationshipStatus
     */

    /**
     * Select specific DelegatedAdminRelationshipStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
